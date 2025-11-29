<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';   // your table name
    protected $primaryKey = 'id';

    protected $fillable = [
        'title_en',
        'title_km',
        'content_km',
        'content_en',
        'image',
    ];
}
