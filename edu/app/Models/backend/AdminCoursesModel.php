<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCoursesModel extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $primaryKey = 'course_id';
}
