<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminCourseCatageoryModel;
use App\Models\backend\AdminCoursesModel;
use App\Models\backend\AdminInstructorModel;
use App\Models\backend\InstructorModel;
use App\Models\frontend\CoursesModel;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Illuminate\Http\Request;
use DB;

class AdminAddCoursesController extends Controller
{
    public function index()
    {
        $catageory = AdminCourseCatageoryModel::get();
        $instructor = AdminInstructorModel::get();
        $data = compact('catageory', 'instructor');
        return view('backend.courses-add')->with($data);
    }

    public function addcourses(Request $request)
    {
        $request->validate([
            'badge' => 'required',
            'instructor' => 'required',
            'courselevel' => 'required',
            'courselectures' => 'required',
            'coursecatageory' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:5000',
            'coursedetails' => 'required|max:50'
        ]);
        $imagename = "education_upload_" . time() . "." . $request->image->extension();
        $folderPath = 'uploads/courses-images';
        $imagePath = $folderPath . '/' . $imagename;
        $request->image->move(public_path($folderPath), $imagename);
        // dd($imagePath);
        $courses = new CoursesModel();
        // $instructor = new InstructorModel();
        // $instructor->instructor_name = $request->instructor;
        $ID = $courses->max('course_id') + 1;
        // echo $ID;
        $courses->course_id = $ID;
        $courses->badge = $request->badge;
        $courses->image = $imagePath;
        $courses->instructor_id = $request->instructor;
        $courses->coursedetails = $request->coursedetails;
        $courses->courselevel = $request->courselevel;
        $courses->courselectures = $request->courselectures;
        $courses->catageory_id = $request->coursecatageory;
        $courses->save();
        return back()->withSuccess('Course is uploaded Successfully!');
    }

    public function update_show($id)
    {
        $course_data = DB::table('courses')
            ->select('courses.*', 'course_catageory.*', 'instructor.*')
            ->join('course_catageory', 'courses.catageory_id', '=', 'course_catageory.catageory_id')
            ->join('instructor', 'courses.instructor_id', '=', 'instructor.instructor_id')
            ->where('course_id', $id)->first();
        $instructor = AdminInstructorModel::all();
        $catageory = AdminCourseCatageoryModel::all();
        $data = compact('course_data', 'instructor', 'catageory');
        return view('backend.course_eedit')->with($data);
    }
    public function update(Request $request, $id)
    {
        $update_course = AdminCoursesModel::find($id);
        if (!$update_course) {
            return redirect()->back()->with('error', 'Course not found');
        }
        $request->validate([
            'badge' => 'required',
            'instructor' => 'required',
            'courselevel' => 'required',
            'courselectures' => 'required',
            'coursecatageory' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|max:5000',
            'coursedetails' => 'required|max:50'
        ]);
        // if (isset($request->image)) {
        //         $imagename = "education_upload_" . time() . "." . $request->image->extension();
        //         $folderPath = 'uploads/courses-images';
        //         $imagePath = $folderPath . '/' . $imagename;
        //         $request->image->move(public_path($folderPath), $imagename);
        //         $update_course->image = $imagePath;
        //     }
        if ($request->hasFile('image')) {
            $imagename = "education_upload_" . time() . "." . $request->image->extension();
            $folderPath = 'uploads/courses-images';
            $imagePath = $folderPath . '/' . $imagename;
            // Delete the old image if it exists
            if ($update_course->image && file_exists(public_path($update_course->image))) {
                unlink(public_path($update_course->image));
            }
            $request->image->move(public_path($folderPath), $imagename);
            $update_course->image = $imagePath;
        }
        $update_course->badge = $request->badge;
        $update_course->instructor_id = $request->instructor;
        $update_course->coursedetails = $request->coursedetails;
        $update_course->courselevel = $request->courselevel;
        $update_course->courselectures = $request->courselectures;
        $update_course->catageory_id = $request->coursecatageory;
        if ($update_course->save()) {
            return back()->with('success', 'Course is uploaded Successfully!');
        } else {
            return redirect('/admin/courses/add')->with('error', 'Data is not submitted');
        }
    }

}
