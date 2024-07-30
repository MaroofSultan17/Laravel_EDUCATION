<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminAuthModel;
use App\Models\frontend\BlogsModel;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $Admin_details = AdminAuthModel::all();
        $blog_details = BlogsModel::all();
        $data = compact('Admin_details', 'blog_details');
        // dd($data);
        return view('frontend.blog')->with($data);
    }
}
