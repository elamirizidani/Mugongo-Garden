<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookroom extends Model
{
    use HasFactory;

    protected $fillable = ['names', 'phone', 'email', 'number_of_rooms', 'price', 'room_id', 'in_date', 'out_date', 'status'];
}
