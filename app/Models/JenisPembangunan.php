<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPembangunan extends Model
{
    use HasFactory;
    protected $table = 'jenis_pembangunan';
    protected $fillable = [
        'nama_jenis',
    ];
}
