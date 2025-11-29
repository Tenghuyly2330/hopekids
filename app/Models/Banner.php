<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';   // your table name
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'image',
    ];
}
