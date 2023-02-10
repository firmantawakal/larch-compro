<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section2 extends Model
{
    use HasFactory;

    protected $table = 'section2';
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
    protected $fillable = [
        'subtitle',
        'content',
        'image',
    ];
}
