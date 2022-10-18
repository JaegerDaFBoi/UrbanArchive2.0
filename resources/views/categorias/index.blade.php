<x-app-layout>
    @section('content')
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-12">

                    <div class="row justify-content-between">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/dibujo.jpg') }}" alt="dibujo" class="category-img mb-6 mx-auto">
                            <a href="{{ route('categorias.mostrar', 1) }}"
                                class="nav-menu-link nav-link nav-menu-link_active btn btn-sm">DIBUJO</a>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/fotografia.jpg') }}" alt="fotografia" class="category-img mb-6 mx-auto">
                            <a href="{{ route('categorias.mostrar', 2) }}"
                                class="nav-menu-link nav-link nav-menu-link_active btn btn-sm">FOTOGRAFIA</a>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/manualidades.jpg') }}" alt="manualidades"
                                class="category-img mb-6 mx-auto">
                            <a href="{{ route('categorias.mostrar', 3) }}"
                                class="nav-menu-link nav-link nav-menu-link_active btn btn-sm">MANUALIDADES</a>
                        </div>
                    </div>
                    <div class="row mt-4 justify-content-between">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/pintura.jpg') }}" alt="pintura" class="category-img mb-6 mx-auto">
                            <a href="{{ route('categorias.mostrar', 4) }}"
                                class="nav-menu-link nav-link nav-menu-link_active btn btn-sm">PINTURA</a>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/tattoo.jpg') }}" alt="tattoo" class="category-img mb-6 mx-auto">
                            <a href="{{ route('categorias.mostrar', 5) }}"
                                class="nav-menu-link nav-link nav-menu-link_active btn btn-sm">TATTOO</a>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/musica.jpg') }}" alt="musica" class="category-img mb-6 mx-auto">
                            <a href="{{ route('categorias.mostrar', 6) }}"
                                class="nav-menu-link nav-link nav-menu-link_active btn btn-sm">OTROS</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
