<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $table = 'visitor';
    protected $fillable = [
        'nama',
        'alamat',
        'kota',
        'no_telp',
        'jenis_pembangunan',
        'issame_location',
        'alamat_lokasi',
        'kota_lokasi',
        'luas_tanah1',
        'luas_tanah2',
        'file',
    ];
}
