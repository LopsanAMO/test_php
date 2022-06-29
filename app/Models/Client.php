<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ([
        'h4',
        'span',
        'h4_2',
    ]);

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
