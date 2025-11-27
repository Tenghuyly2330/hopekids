<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';   // your table name
    protected $primaryKey = 'id';

    protected $fillable = [
        'title_en',
        'title_km',
        'content_km',
        'content_en',
        'slug',
        'image',
    ];
}
