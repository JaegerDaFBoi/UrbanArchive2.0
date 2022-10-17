<x-guest-layout>
    @section('content')
        <div class="container center mx-auto mb-3">
            <div class="row align-content-center justify-content-center ">
                <div class="col-md-8">
                    <div class="card bg-dark">
                        <div class="card-header text-center">
                            <h2 class="register-text">REGISTRARSE</h2>
                        </div>
                        <div class="card-body text-center">
                            <x-jet-validation-errors class="mb-4" />
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="name" class="register-text">Nombre Completo</label>
                                        <input type="text" name="name" class="auth-input form-control"
                                            :value="old('name')" required autofocus autocomplete="name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="telefono" class="register-text">Número de Celular</label>
                                        <input type="text" name="telefono" class="auth-input form-control"
                                            :value="old('telefono')">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="tipodoc" class="register-text">Tipo de Documento</label>
                                        <input type="text" name="tipodoc" class="auth-input form-control"
                                            :value="old('tipodoc')">
                                    </div>
                                    <div class="form-group col-md-8 align-self-end">
                                        <label for="documento" class="register-text">Número de documento</label>
                                        <input type="text" name="documento" class="auth-input form-control"
                                            :value="old('documento')">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="form-group col-md-12">
                                        <label for="tipousuario" class="register-text">Seleccione tipo de usuario</label>
                                        <select name="tipousuario" class="form-select">
                                            <option value="3" disabled selected>Seleccione una opción</option>
                                            <option value="2"> Usuario</option>
                                            <option value="3">Artista</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="form-group col-md-12 justify-self-start">
                                        <label for="genero" class="register-text">Género</label>
                                        <select name="genero" class="form-select">
                                            <option value="" disabled selected>Seleccione una opción</option>
                                            <option value="F"> Femenino</option>
                                            <option value="M">Masculino</option>
                                            <option value="o">Otros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="email" class="register-text">Correo Electronico</label>
                                        <input type="text" name="email" class="auth-input form-control"
                                            :value="old('email')" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="password" class="register-text">Contraseña</label>
                                        <input type="password" name="password" class="auth-input form-control" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="password_confirmation" class="register-text">Confirme contraseña</label>
                                        <input type="password" name="password_confirmation" class="auth-input form-control" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-md bg-warning register-text button-submit">Registrarse</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-guest-layout>
