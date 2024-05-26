<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminCourseCatageoryModel;
use Illuminate\Http\Request;

class AdminCourseCatageoryController extends Controller
{
    public function catageory()
    {
        return view('backend.course-catageory');
    }
    public function add_catageory()
    {
        return view('backend.course-catageory-add');
    }
    public function submit_catageory(Request $request)
    {
        $request->validate([
            'catageory_name' => 'required',
            'catageory_details' => 'required'
        ]);
        $catageory = new AdminCourseCatageoryModel();
        $ID = $catageory->max('catageory_id');
        $catageory->catageory_id = $ID + 1;
        $catageory->catageory_name = strtolower($request->catageory_name);
        $catageory->catageory_details = $request->catageory_details;
        $catageory->save();
        return redirect('/admin/courses/catageory')->with('success', 'Catageory added successfully!');
    }
}
