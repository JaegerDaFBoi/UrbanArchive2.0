<?php

namespace App\Http\Livewire\Categoria;

use App\Models\Publicacion;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class GaleriaCategoria extends Component
{

    public $imagenes;

    public function mount($imagenes)
    {
        $this->imagenes = $imagenes;
    }

    public function verPublicacion($id)
    {
        $publicacion = Publicacion::with('imagenP')->find($id);
        return Redirect::route('publicacion.show', compact('publicacion'));
    }
    
    public function render()
    {
        return view('livewire.categoria.galeria-categoria');
    }
}
