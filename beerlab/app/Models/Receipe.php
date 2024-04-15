<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    use HasFactory;
    protected $table = 'Receipe';
    public function tank()
    {
        return $this->belongsTo(Tanks::class);
    }
}
