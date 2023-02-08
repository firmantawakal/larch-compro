<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'setting';
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    protected $keyType = 'integer';

    /**
     * Fillable input
     *
     * @var array
     */
    protected $fillable = ['*'];
}
