<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananKomputer extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'title', 'description', 'image', 'price'];

    protected $table = 'layanankomputer';
}
