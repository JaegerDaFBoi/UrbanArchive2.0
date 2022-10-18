<x-app-layout>
    @section('content')
    <center><h2 style="font-size: 44px;" class="category-title">✠ {{ $categoria->name }} ✠</h2></center>
    <div class="container-fluid">
        <livewire:categoria.galeria-categoria :imagenes='$imagenes' />
    </div>
    @endsection
</x-app-layout>