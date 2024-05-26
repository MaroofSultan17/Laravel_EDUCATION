<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminCoursesModel;
use Illuminate\Http\Request;

class AdminCoursesController extends Controller
{
    public function index()
    {
        $courses = AdminCoursesModel::all();
        $data = compact('courses');
        return view('backend.courses')->with($data);
    }

}
