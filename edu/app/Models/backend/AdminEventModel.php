<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminEventModel extends Model
{
    use HasFactory;
    protected $table = "events";
    protected $primarykey = "id";
}
