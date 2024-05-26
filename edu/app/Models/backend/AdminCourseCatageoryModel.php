<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCourseCatageoryModel extends Model
{
    use HasFactory;
    protected $table = 'course_catageory';
    protected $primary_key = 'catageory_id';
}
