<x-app-layout>
    @section('content')
    <div class="container center mx-auto mb-3">
        <div class="row align-content-center justify-content-center">
            <div class="col-md-12">
                <div class="card bg-dark">
                    <div class="card-header text-center">
                        <h2 class="register-text text-uppercase">{{ $publicacion->titulo }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-12 ">
                                <img src="{{ asset('storage/' . $publicacion->imagenP->path) }}" alt="{{ $publicacion->titulo }}" class="img-fluid rounded mx-auto">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <p class="register-text text-center">{{ $publicacion->descripcion }}</p>
                            </div>
                        </div>
                        <div class="row mt-2 d-flex">
                            <div class="col-6">
                                <p class="register-text text-center">Fecha de publicación: {{ $fecha }}</p>
                            </div>
                            <div class="col-6 text-center">
                                <p class="register-text ">Artista: <a href="{{ route('publicacion.perfilartista', $artista->id) }}">{{ $artista->name }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection
</x-app-layout>