<?php

namespace App\Models;

use App\Models\Icons;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisory extends Model
{
    use HasFactory;

    protected $fillable = ([
        'subh4',
        'p1',
        'icon_id',
    ]);

    public function productos()
    {
     return $this->belongsToMany(Icons::class);
    }
}
