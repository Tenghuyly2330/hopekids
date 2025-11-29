<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'socials';   // your table name
    protected $primaryKey = 'id';

    protected $fillable = [
        'url',
        'name'
    ];
}
