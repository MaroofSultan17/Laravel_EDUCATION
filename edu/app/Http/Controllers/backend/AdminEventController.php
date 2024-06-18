<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminEventModel;
use Illuminate\Http\Request;

class AdminEventController extends Controller
{
    public function index()
    {
        $events = AdminEventModel::get();
        $data = compact('events');
        return view('backend.events')->with($data);
    }
    public function add_event()
    {
        return view('backend.events-add');
    }
    public function submit_event(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'address' => 'required',
            'image' => 'required|mimes:png,jpg,jped,svg|max:1024'
        ]);
        $ImageName = "event_image_" . time() . "." . $request->image->extension();
        $FolderPath = "uploads/events";
        $ImagePath = $FolderPath . "/" . $ImageName;
        $request->image->move(public_path($FolderPath), $ImageName);
        // dd($ImagePath);
        $events = new AdminEventModel();
        $ID = $events->max('id');
        $events->id = $ID + 1;
        $events->image = $ImagePath;
        $events->title = $request->title;
        $events->address = $request->address;
        $events->date = $request->date;
        $events->save();
        return redirect('/admin/events')->with('success', 'Events Add Successfullt');
    }
}
