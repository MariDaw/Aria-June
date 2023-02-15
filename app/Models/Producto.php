<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function carritos()
    {
        return $this->hasMany(Carrito::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function saves_pros()
    {
        return $this->hasMany(SavePro::class);
    }
}
