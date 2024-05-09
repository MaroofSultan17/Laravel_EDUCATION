<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\frontend\CoursesModel;
use Illuminate\Http\Request;

class AdminAddCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.courses-add');
    }

    /**
     * Show the form for creating a new resource.
     */
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

        // $mime = $request->file('image')->getClientMimeType();
        // echo $mime;
        // $imagename = "education_upload_" . time() . "." . $request->image->extension();
        // $imagePath = $request->image->move(public_path('courses-images'), $imagename);
        // dd($imagePath);

        $imagename = "education_upload_" . time() . "." . $request->image->extension();
        $folderPath = 'courses-images';
        $imagePath = $folderPath . '/' . $imagename;
        $request->image->move(public_path($folderPath), $imagename);
        // dd($imagePath);
        $courses = new CoursesModel();
        $ID = $courses->max('id') + 1;
        // echo $ID;
        $courses->id = $ID;
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
