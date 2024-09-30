<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HairStylist extends Model
{
    use HasFactory;

    // Specify the fillable properties
    protected $fillable = ['name', 'available', 'booked_appointments'];
}

