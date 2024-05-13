<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorModel extends Model
{
    use HasFactory;
    protected $table = 'instructor';
    protected $primary_key = 'instructor_id';
}
