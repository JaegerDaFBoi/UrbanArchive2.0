<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = "categorias";

    public function publicaciones() {
        return $this->hasMany('App\Models\Publicacion', 'id_publicacion', 'id');
    }
}
