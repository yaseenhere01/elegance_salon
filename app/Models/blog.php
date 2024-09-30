<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Controllers\AuthorController;


class blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'blogtitle',
        'blogname',
        'blogdescription',
        'author',
        'image',
        
    ];
}
