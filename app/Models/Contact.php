<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ([
        'h4',
        'corporate',
        'address',
        'phone1',
        'phone2',
        'email'
    ]);
}
