<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function publicaciones(){
        return $this->hasMany(Publicacion::class);
    }

    public function saves(){
        return $this->hasMany(Save::class);
    }

    public function saves_pro(){
        return $this->hasMany(SavePro::class);
    }

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
