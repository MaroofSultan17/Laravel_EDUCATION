<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\EventDetailsModel;
use Illuminate\Http\Request;

class EventDetailsController extends Controller
{
    public function index()
    {
        return view('frontend.event-details');
    }
}