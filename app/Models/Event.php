<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $primaryKey = 'id';
    protected $fillable = [
        'title_en',
        'title_km',
        'content_en',
        'content_km',
        'slug',
        'image',
    ];
    protected $casts = [
        'image' => 'array'
    ];
}
