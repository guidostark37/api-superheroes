<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heroes extends Model
{
    use HasFactory;


    // protected  $hidden = [
    //     'password'
    // ];

    public function planeta()
    {
        return $this->belongsTo('planetas','id');
    }

    public function equipo()
    {
        return $this->belongsTo('equipos','id');
    }
}
