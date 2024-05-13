<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCatageoryModel extends Model
{
    use HasFactory;
    protected $table = 'coourse_catageory';
    protected $primary_key = 'catageory_id';
}
