<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measures extends Model
{
    use HasFactory;
    protected $table = 'Measures';
    public function tank()
    {
        return $this->belongsTo(Tanks::class);
    }
}
