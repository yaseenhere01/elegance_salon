<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakeupArtist extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_name', // Add this line
        'available',   // Make sure other fields are also included
        // Add any other fields you need
    ];
}
