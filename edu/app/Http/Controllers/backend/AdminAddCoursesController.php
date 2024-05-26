<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminCourseCatageoryModel;
use App\Models\backend\AdminInstructorModel;
use App\Models\backend\InstructorModel;
use App\Models\frontend\CoursesModel;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Illuminate\Http\Request;

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
        $folderPath = 'courses-images';
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
}
