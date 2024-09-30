<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Controllers\AdminController;


class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'pname',
        'pitem',
        'pprice',
        'pimage',
    ];
}
