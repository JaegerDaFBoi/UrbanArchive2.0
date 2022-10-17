<x-app-layout>
    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="grid-container">
                    @foreach ($imagenes as $key => $imagen)
                        <div class="grid-item {{ rand(1, 9) == 2 ? 'tall' : '' }} {{ rand(1, 5) == 3 ? 'wide' : '' }}"
                            style="background-image: url({{ asset('storage/' . $imagen->path) }})"
                            type="button" data-bs-toggle="modal" data-bs-target="#modalImagen">
                            <p class="align-items-center justify-content-center"><span>{{ $imagen->publicacion->titulo }}</span></p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
    @push('modals')
    <div class="modal fade" id="modalImagen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    @endpush
</x-app-layout>
