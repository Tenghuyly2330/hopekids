<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'careers';   // your table name
    protected $primaryKey = 'id';

    protected $fillable = [
        'position_en',
        'position_km',
        'slug'
    ];
}
