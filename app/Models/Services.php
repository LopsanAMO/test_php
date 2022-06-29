<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = ([
        'h4',
        'span',
        'service1',
        'service2',
        'service3',
        'service4',
        'service5',
    ]);
}
