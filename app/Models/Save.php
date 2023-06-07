<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;

    public function getStatusButtonAttribute()
    {
        $color =
        [
            'Save'    => 'primary',
            'Saved' => 'warning',
        ];
        return $color[$this->estado];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function publicacion(){
        return $this->belongsTo(Publicacion::class);
    }


}
