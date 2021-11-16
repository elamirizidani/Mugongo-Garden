<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyflower extends Model
{
    use HasFactory;
    protected $fillable = ['names', 'address', 'phone', 'email', 'quantity', 'price', 'flower_id', 'delivery_date'];
}
