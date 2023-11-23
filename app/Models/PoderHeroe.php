<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoderHeroe extends Model
{
    use HasFactory;

    public function heroes()
    {
        return $this->belongsTo('heroes','id');
    }

    public function superpoder()
    {
        return $this->belongsToMany(Superpoder::class);
    }
}
