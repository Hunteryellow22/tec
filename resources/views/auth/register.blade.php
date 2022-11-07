    <!----------Registrar usuario (Administrador)---------->

    @extends('layouts.app')

    @section('content')

    <!--Contenedores principales del mensaje-->
    <div class="contenedor_formu">

        <div class="contenedor_formu2">

        <div class="titulo">Registrar usuario</div>

        <!--Form a llenar del registro de usuarios-->
        <form method="POST" action="{{ route('register') }}">

    @csrf

            <!--Nombre con su validación-->
            <label for="name" class="label_campo">{{ __('Name') }}</label>
            <input id="name" type="text" class="form_campo" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

    @error('name')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror

            <!--Email con validación-->
            <label for="email" class="label_campo">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form_campo" name="email" value="{{ old('email') }}" required autocomplete="email">

    @error('email')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror

            <!--Rol-->
            <label for="rol" class="label_campo">{{ __('Rol') }}</label>
            <select id="rol"  class="form_campo" name="rol">
                <option>Jefe </option>
                <option>Profesor</option>
            </select>

            <!--Contraseña con validación-->
            <label for="password" class="label_campo">{{ __('Password') }}</label>
            <input id="password" type="password" class="form_campo" name="password" required autocomplete="new-password">

    @error('password')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror

            <!--Confirmar contraseña con validación-->
            <label for="password-confirm" class="label_campo">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form_campo" name="password_confirmation" required autocomplete="new-password">
                
            <!--Contenedor de botones de form-->
            <div class="nm_botones">
                <button type="submit" id="b_subm">{{ __('Register') }}</button>
            </div>

        </div>

    </div>

@endsection
