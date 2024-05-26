<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminInstructorModel;
use Illuminate\Http\Request;

class AdminInstructorController extends Controller
{
    public function index()
    {
        $instructor = AdminInstructorModel::get();
        $data = compact('instructor');
        return view('backend.instructor')->with($data);
    }
    public function instructor()
    {
        return view('backend.instructor-add');
    }
    public function add_instructor(Request $request)
    {
        $request->validate([
            'instructor_name' => 'required',
            'instructor_email' => 'required|email',
            'instructor_contact' => 'required|max:14',
            'instructor_experties' => 'required|max:2000'
        ]);

        // dd($request->instructor_name);
        $instructor = new AdminInstructorModel();
        $ID = $instructor->max('instructor_id');
        $instructor->instructor_id = $ID + 1;
        $instructor->instructor_name = strtolower($request->instructor_name);
        $instructor->instructor_email = $request->instructor_email;
        $instructor->instructor_contact = $request->instructor_contact;
        $instructor->instructor_experties = $request->instructor_experties;
        $instructor->save();
        return redirect('/admin/instructor')->with('success', 'Instructors details submit successfully.');
    }
}
