<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\InstructorModel;
use App\Models\frontend\CoursesModel;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Illuminate\Http\Request;

class AdminAddCoursesController extends Controller
{
    public function index()
    {
        return view('backend.courses-add');
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
        $courses->instructor = $request->instructor;
        $courses->coursedetails = $request->coursedetails;
        $courses->courselevel = $request->courselevel;
        $courses->courselectures = $request->courselectures;
        $courses->coursecatageory = $request->coursecatageory;
        $courses->save();

        return back()->withSuccess('Course is uploaded Successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
