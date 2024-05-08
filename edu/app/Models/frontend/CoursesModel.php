<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesModel extends Model
{
    protected $table = 'courses';
    protected $primarykey = 'id';
    use HasFactory;
}
