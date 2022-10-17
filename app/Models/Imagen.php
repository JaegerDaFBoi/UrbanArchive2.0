<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $table = "imagenes";

    public function publicacion() {
        return $this->belongsTo('App\Models\Publicacion', 'id_publicacion', 'id'); 
    }
    
}
