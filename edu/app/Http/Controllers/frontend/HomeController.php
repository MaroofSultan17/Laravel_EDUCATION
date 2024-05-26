<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminCourseCatageoryModel;
use App\Models\frontend\CoursesModel;
use App\Models\frontend\EventModel;
use App\Models\frontend\HomeModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $courses = CoursesModel::all();
        $courses = DB::table('courses')
            ->select('courses.*', 'course_catageory.catageory_name', 'instructor.instructor_name')
            ->join('course_catageory', 'courses.catageory_id', '=', 'course_catageory.catageory_id')
            ->join('instructor', 'courses.instructor_id', '=', 'instructor.instructor_id')
            ->get();
        $events = EventModel::all();
        $catageory = AdminCourseCatageoryModel::all();
        $data = compact('courses', 'events', 'catageory');
        return view('frontend.index')->with($data);
    }
}
