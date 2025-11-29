<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experince extends Model
{
    protected $table = 'experinces';   
    protected $primaryKey = 'id';

    protected $fillable = [
        'year',
        'branch',
        'student',
        'staff',
    ];
}
