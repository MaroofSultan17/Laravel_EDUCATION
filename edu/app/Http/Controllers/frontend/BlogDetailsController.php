<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminAuthModel;
use App\Models\frontend\BlogsModel;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function index($blog_id)
    {
        $blog_details = BlogsModel::where('id', $blog_id)->first();
        $Admin_details = AdminAuthModel::all();
        $data = compact('blog_details', 'Admin_details');
        return view('frontend.blog-details')->with($data);
    }
}
