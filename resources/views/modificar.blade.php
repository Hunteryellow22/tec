    <!----------Modificar usuario lista (Administrador)---------->
    @extends('layouts.app')

    @section('content')

    <!--Contenedor principal de lista de usuario-->
    <div class="mensajes">

        <!--Contenedor para la numeración de pagina-->
        <div class="paginacion">
                <div class="pagina_numero">Página 1 de 0</div>
                <a id="b_pagina_atras"><i class="fas fa-angle-left"></i></a>
                <a id="b_pagina_adelante"><i class="fas fa-angle-right"></i></a>
        </div>

        <ul>

    @foreach($usuarios as $pastel)

            <li>
                <!--Estructura de la lista de usuarios-->
                <a id="mensaje_abrir" href="">
                    <div id="u_id">{{ $pastel->id }}</div>
                    <div id="u_nombre">{{ $pastel->name }}</div>
                    <div id="u_correo">{{ $pastel->email }}</div>
                    <div id="u_rol">{{ $pastel->rol }}</div>
                </a>

    @csrf

    <!--Metodo para eliminar usuario-->
    @method('DELETE')
    <form id="usuario_eliminar" action="{{ route('modificar.destroy', $pastel->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button id="u_eliminar" ><i id="i_e"class="fas fa-backspace"></i></button>
    </form>

                <!--Metodo de modificar usuario-->
                <a id="usuario_modificar" type="submit" href="{{ url('/modificar/'.$pastel->id.'/edit') }}">
                <div id="u_modificar"><i class="fas fa-wrench"></i></div>
                </a>

            </li>

    @endforeach

    @endsection
