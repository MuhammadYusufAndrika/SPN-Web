<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananInternet extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'title', 'description', 'image', 'price'];

    protected $table = 'layananinternet';
}
