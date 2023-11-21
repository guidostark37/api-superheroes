<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MisionEquipo extends Model
{
    use HasFactory;
    
    public function equipo()
    {
        return $this->belongsTo('equipos','id');
    }

    public function misions()
    {
        return $this->belongsTo('misions','id');
    }
}
