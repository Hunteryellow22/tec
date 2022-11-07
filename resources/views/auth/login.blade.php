   <!----------LOGIN---------->
   @extends('layouts.app')


   @section('content')
   <!--Contenedores princiaples del login-->
   <div class="contenedor_formu">

      <div class="contenedor_formu2">

         <!--Form para iniciar sesión-->
         <form method="POST" action="{{ route('login') }}">
            <div class="titulo">Iniciar sesión</div>

   @csrf
            <!--Email con validación-->
            <label for="email" class="label_campo">{{ __('E-Mail Address') }}</label>
            <input class="form_campo"id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

   @error('email')
   <span class="invalid-feedback" role="alert">
   <strong>{{ $message }}</strong>
   </span>
   @enderror
            <!--Contraseña con validación-->
            <label for="password" class="label_campo">{{ __('Password') }}</label>
            <input class="form_campo" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

   @error('password')
   <span class="invalid-feedback" role="alert">
   <strong>{{ $message }}</strong>
   </span>
   @enderror
            <!--Check para recordar cuenta-->
            <div class="form-check">
            <input class="input_check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="label_recuerdame" for="remember">
   {{ __('Remember Me') }}
            </label>
            </div>
            <!--Botón de submit de formulario-->
            <div class="nm_botones">
               <button type="submit" id="b_subm">{{ __('Login') }}</button>
            </div>

         </form>

      </div>

   </div>

   @endsection
