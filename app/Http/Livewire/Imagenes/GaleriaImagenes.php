<?php

namespace App\Http\Livewire\Imagenes;

use App\Models\Publicacion;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class GaleriaImagenes extends Component
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
        return view('livewire.imagenes.galeria-imagenes');
    }
}
