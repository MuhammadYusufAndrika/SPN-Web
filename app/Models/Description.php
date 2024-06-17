<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    // Menentukan field yang boleh diisi secara massal
    protected $fillable = ['title', 'content'];
}

