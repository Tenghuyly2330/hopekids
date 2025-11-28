<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table = 'certificates';   // your table name
    protected $primaryKey = 'id';

    protected $fillable = [
        'title_en',
        'title_km',
        'image',
    ];
}
