<x-app-layout>
    @section('content')
    <div class="container">
        <div class="banner">
            <h3 class="text-center" style="font-size: 60px">✠ PERFIL DEL ARTISTA ✠</h3>
        </div>
        <main>
          <div class="row">
            <div class="left col-lg-4">
              <div class="photo-left">
                <img class="photo" src="{{ asset('assets/img/profile.jpg') }}"/>
                <div class="active"></div>
              </div>
              <h4 class="name mb-1">{{Auth::user()->name }}</h4>
              <p class="info mb-1">{{Auth::user()->telefono}}</p>
              <p class="info mb-1">{{Auth::user()->email}}</p>
              <div class="stats row">
  
                <div class="stat col-xs-4">
                  <p class="number-stat mb-2">{{ $numpublicaciones }}</p>
                  <p class="desc-stat">Cantidad de publicaciones</p>
                </div>
  
              </div>
              <p class="desc">Sin descripcion por el momento</p>
            </div>
            <div class="right col-lg-8">
              <ul class="nave">
                <li>Publicaciones</li>
              </ul>
              <div class="row gallery">
                  @foreach ($publicacion as $imagen)
                      <div class="col-md-4">
                        <img src="{{ asset('storage/' . $imagen->path) }}" alt="{{$imagen->publicacion->titulo}}">
                      </div>
                  @endforeach
                {{-- <div class="col-md-4">
                   <img src="https://picsum.photos/id/65/900/900.jpg"/>
                </div>
                <div class="col-md-4">
                  <img src="https://picsum.photos/id/65/900/900.jpg"/>
                </div>
                <div class="col-md-4">
                   <img src="https://picsum.photos/id/65/900/900.jpg"/>
                </div>
                <div class="col-md-4">
                   <img src="https://picsum.photos/id/65/900/900.jpg"/>
                </div>
                <div class="col-md-4">
                  <img src="https://picsum.photos/id/65/900/900.jpg"/>
                </div>
                <div class="col-md-4">
                  <img src="https://picsum.photos/id/65/900/900.jpg"/>
                </div> --}}
              </div>
            </div>
        </main>
      </div>
    @endsection
</x-app-layout>