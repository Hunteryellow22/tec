    <!----------Modificar usuario (Administrador)---------->

    @extends('layouts.app')

    @section('content')

    <!--Contenedores principales-->
    <div class="contenedor_formu">

        <div class="contenedor_formu2">

            <div class="titulo">{{ $usuarios->name  }}</div>

            <!--Form para actualizar los datos del usuario con su metodo-->
            <form action="{{ route('modificar.update',$usuarios->id) }}" method="POST">

    @csrf
    @method('PUT')

            <!--Actualizar nombre y su validación-->
            <label for="name" class="label_campo">{{ __('Name') }}</label>
            <input id="name" type="text" class="form_campo @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

    @error('name')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror
            
            <!--Actualizar correo y su validación-->
            <label for="email" class="label_campo">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form_campo @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

    @error('email')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror
        
            <!--Actualizar Rol-->
            <label for="rol" class="label_campo">{{ __('Rol') }}</label>
            <select id="rol"  class="form_campo" name="rol">
                <option>Jefe </option>
                <option>Profesor</option>
            </select>

            <!--Contenedor de botones-->
            <div class="nm_botones">
                <button type="submit" id="b_subm">Guardar cambios</button>
            </div>

        </div>

    </div>

    @endsection