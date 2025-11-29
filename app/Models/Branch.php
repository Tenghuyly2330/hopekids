<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';   // your table name
    protected $primaryKey = 'id';

    protected $fillable = [
        'title_en',
        'title_km',
        'content_en',
        'content_km',
        'image',
        'url_map',
    ];
}
