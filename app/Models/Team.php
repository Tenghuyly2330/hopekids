<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';   // your table name
    protected $primaryKey = 'id';

    protected $fillable = [
        'name_en',
        'name_km',
        'position_en',
        'position_km',
        'content_km',
        'content_en',
        'image',
    ];
}
