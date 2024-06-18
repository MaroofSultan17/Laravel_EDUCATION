<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAuthModel extends Model
{
    use HasFactory;
    protected $table = "admin";
    protected $primaryKey = "id";
}
