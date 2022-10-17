<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    protected $table = "publicaciones";

    public function usuario() {
        return $this->belongsTo('App\Models\User', 'id_usuario', 'id');
     }
 
     public function categoria() {
        return $this->belongsTo('App\Models\Categoria', 'id_categoria', 'id');
     }
 
     public function imagenes() {
         return $this->hasMany('App\Models\Imagen', 'id_publicacion', 'id');
     }

     public function imagenP() {
        return $this->hasOne('App\Models\Imagen')->latest();
    }
}
