<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style_index.css') }}">
</head>

<body>

<div class="contenedor_pagina">
     <!--Contenedor del menú lateral-->
     <div class="contenedor_menu">

@guest

         <!--Menu lateral cuando estas en login como guest-->
         <div class="menu_perfil">
             <a class="navbar-brand" href="{{ url('/') }}">
             <div class="menu_perfil_foto" id="m_p_l"><img width="100px" id="m_p_f" src="img/avatar.png" alt=""> </div>
             </a>
         </div> 

@endguest

@guest

@else
         <!--Contenedor de el nombre de usuario e imagen-->
         <div class="menu_perfil">
             <div class="menu_perfil_foto" id="m_p_l"><img width="50px" id="m_p_f" src="img/avatar.png" alt=""> </div>
             <div class="menu_perfil_nombre" id="m_p_l"><h3 id="menu_lista" >{{ Auth::user()->name }} </h3></div>
         </div>

@if (Auth::user()->rol == 'Jefe')

         <!--Menu como administrador-->
         <div class="menu">
             <a href="{{ route('home') }}"><div class="menu_lista"><i id="i_m"class="fas fa-home"></i><h3 id="menu_lista" > Inicio </h3></div></a>

@if (Route::has('register'))

             <a href="{{ route('register') }}"><div class="menu_lista"><i id="i_m" class="fas fa-user-plus"></i><h3 id="menu_lista" > Registro </h3></div></a>
            
@endif 

             <a href="{{ url('/modificar') }}"><div class="menu_lista"><i id="i_m"class="fas fa-wrench"></i><h3 id="menu_lista" > Modificar usuario </h3></div></a>
             <a href="{{route('NuevoMensaje.index')}}"><div class="menu_lista"><i id="i_m"class="fas fa-envelope"></i><h3 id="menu_lista" > Nuevo Mensaje </h3></div></a>
             
             <!--Logout del menu-->
             <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                 <div class="menu_lista"><i id="i_m"class="fas fa-sign-out-alt"></i><h3 id="menu_lista" > Cerrar sesion</h3></div>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
                     </form>
             </a> 
         </div>

@else

        <!--Menu como profesor-->
         <div class="menu">
             <a href="{{ route('home') }}"><div class="menu_lista"><i id="i_m"class="fas fa-home"></i><h3 id="menu_lista" > Inicio </h3></div></a>
             <a href="{{route('NuevoMensaje.index')}}"><div class="menu_lista"><i id="i_m"class="fas fa-envelope"></i><h3 id="menu_lista" > Nuevo Mensaje </h3></div></a>
             <!--Logout del menu-->
             <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                 <div class="menu_lista"><i id="i_m"class="fas fa-sign-out-alt"></i><h3 id="menu_lista" > Cerrar sesion</h3></div>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
                 </form>
             </a> 
         </div>

@endif

@endguest
     </div>
    
     <!--Contenedor del resto de las páginas-->
     <div class="contenedor_central">

     <!--Fecha-->
     <div class="fecha">{{date('d-m-Y')}}</div>

@yield('content')

     </div>

</div>   
</body>
</html>
