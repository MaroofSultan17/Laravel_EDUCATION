<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminCoursesModel;
use Illuminate\Http\Request;
use DB;

class AdminCoursesController extends Controller
{
    public function index()
    {
        // $courses = AdminCoursesModel::all();
        // $data = compact('courses');
        // $courses = DB::table('courses')
        //     ->join('course_catageory', 'courses.catageory_id', '=', 'course_catageory.catageory_id')
        //     ->join('instructor', 'courses.instructor_id', '=', 'instructor.instructor_id')
        //     ->first();
        // $data = compact('courses');
        // return view('backend.courses')->with($data);
        $courses = DB::table('courses')
            ->select('courses.*', 'course_catageory.catageory_name', 'instructor.instructor_name')
            ->join('course_catageory', 'courses.catageory_id', '=', 'course_catageory.catageory_id')
            ->join('instructor', 'courses.instructor_id', '=', 'instructor.instructor_id')
            ->get();
        $data = compact('courses');
        return view('backend.courses')->with($data);
    }
}
