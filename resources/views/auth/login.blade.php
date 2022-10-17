<x-guest-layout>
    @section('content')
        <div class="container center mx-auto mb-3 vh-100">
            <div class="row align-content-center justify-content-center ">
                <div class="col-md-8">
                    <div class="card bg-dark">
                        <div class="card-header text-center">
                            <h2 class="register-text">ACCEDER</h2>
                        </div>
                        <div class="card-body">
                            <x-jet-validation-errors class="mb-4" />

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="" method="POST">
                                @csrf
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
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-md bg-warning register-text button-submit">Iniciar Sesión</button>
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
