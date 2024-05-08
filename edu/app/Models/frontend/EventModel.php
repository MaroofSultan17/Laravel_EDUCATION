<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    protected $table = 'events';
    protected $primarykey = 'id';
    use HasFactory;
}
