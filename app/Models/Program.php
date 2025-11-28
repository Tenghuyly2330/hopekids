<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';   // your table name
    protected $primaryKey = 'id';

    protected $fillable = [
        'title_en',
        'title_km',
        'content_km',
        'content_en',
        'number_en',
        'number_km',
        'slug',
        'image',
    ];
}
