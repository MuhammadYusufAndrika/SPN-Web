<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;


    protected $fillable = [
        '_token',
        'nama',
        'email',
        'alamat',
        'no_hp',
        'deskripsi_keluhan',
        'tanggal_pengaduan',
    ];
}
