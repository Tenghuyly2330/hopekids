<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'parents';   // your table name
    protected $primaryKey = 'id';

    protected $fillable = [
        'content_km',
        'content_en',
        'url',
    ];
}
