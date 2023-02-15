<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famoso extends Model
{
    use HasFactory;

    /* public function famoso(){
        return $this->belongsTo(Famoso::class);
    } */

    public function publicaciones()
    {
        return $this->hasMany(Publicacion::class);
    }
}
