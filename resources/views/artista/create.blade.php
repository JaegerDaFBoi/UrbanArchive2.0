<x-app-layout>
    @section('content')
        <div class="container center mx-auto mb-3">
            <div class="row align-content-center justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-dark">
                        <div class="card-header text-center">
                            <h2 class="register-text">CREAR PUBLICACIÓN</h2>
                        </div>
                        <div class="card-body text-center">
                            <form action="{{ route('publicacion.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="categoria" class="register-text">Categoria</label>
                                        <select name="categoria" class="form-select">
                                            @foreach ($categorias as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="titulo" class="register-text">Titulo</label>
                                        <input type="text" name="titulo" class="form-control auth-input">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="descripcion" class="register-text">Descripción</label>
                                        <textarea name="descripcion" cols="20" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="fotos" class="register-text">Subir Imagen</label>
                                        <input type="file" name="fotos" class="form-control" id="fotos" accept="image/*">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6 mx-auto">
                                        <button type="submit" class="btn btn-round bg-warning text-white">
                                            Guardar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
