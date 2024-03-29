<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['prenda', 'url'];

    public function publicacion()
    {
        return $this->belongsTo(Publicacion::class);
    }
}
