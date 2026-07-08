<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
     protected $fillable = [
        'address',
        'phone1',
        'phone2',
        'email',
        'map',
    ];
}
