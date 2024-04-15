<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanks extends Model
{
    use HasFactory;

    protected $table = 'Tanks';

    public function receipe()
    {
        return $this->belongsTo(Receipe::class);
    }

    public function measure()
    {
        return $this->hasMany(Measures::class);
    }

}
