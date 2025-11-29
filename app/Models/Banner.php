<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';   // your table name
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'title1_en',
        'title1_km',
        'title2_en',
        'title2_km',
        'title3_en',
        'title3_km',
        'content_en',
        'content_km',
        'image',
    ];
}
