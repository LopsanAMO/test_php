<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ([
        'image',
        'client_id',
        'name',
        'text',
        'year',
        'money',
    ]);

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
