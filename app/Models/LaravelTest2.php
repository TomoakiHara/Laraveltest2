<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelTest2 extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'mail'];
}
