<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthModel extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $fillable = [
        'google_id',
        'email',
        'password',
        'token'
    ];
}
