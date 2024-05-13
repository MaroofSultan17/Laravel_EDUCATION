<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesModel extends Model
{
    protected $table = 'courses';
    protected $primarykey = 'course_id';
    use HasFactory;
}
