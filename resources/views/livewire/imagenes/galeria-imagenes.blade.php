<div>
    <div class="row">
        <div class="grid-container">
            @foreach ($imagenes as $key => $imagen)
                <div class="grid-item {{ rand(1, 9) == 2 ? 'tall' : '' }} {{ rand(1, 5) == 3 ? 'wide' : '' }}"
                    style="background-image: url({{ asset('storage/' . $imagen->path) }})" type="button"
                    wire:click="verPublicacion({{ $imagen->publicacion->id }})">
                    <p class="align-items-center justify-content-center"><span>{{ $imagen->publicacion->titulo }}</span>
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>
