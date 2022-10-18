<x-app-layout>
    @section('content')
        <div class="container-fluid">
            <livewire:imagenes.galeria-imagenes :imagenes='$imagenes' />
        </div>
    @endsection
</x-app-layout>
