    <!----------INICIO---------->
    @extends('layouts.app')

    @section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
    {{ session('status') }}
        </div>

    @endif
    <!--Imagen princiapl-->
    <div class="imagen">Bienvenido</div>

    <!--Texto de bandeja de entrada-->
    <div class="bandeja_mensaje">Bandeja de entrada</div> 
    <!--Filtros-->
    <div class="contenedor_filtro">
        <div class="mensaje_importante" id="t_m">
            <a href="{{route('filtro.show','Importante')}}"><h3 id="t_m_h3">Importante</h3></a>
        </div>
        <div class="mensaje_solicitud" id="t_m">
            <a href="{{route('filtro.show','Solicitud')}}"><h3 id="t_m_h3">Solicitud</h3></a>
        </div>
        <div class="mensaje_informativo" id="t_m">
            <a href="{{route('filtro.show','Informativo')}}"><h3 id="t_m_h3">Informativo</h3></a>
        </div>
        <div class="mensaje_todo" id="t_m">
            <a href="{{route('home')}}"><h3 id="t_m_h3">Todo</h3></a>
        </div>
    </div>

    <!--Mensajes-->
    <div class="mensajes">
        <!--Contenedor para la numeración de pagina-->
        <div class="paginacion">
            <div class="pagina_numero">
                {{ $mensajes->links() }}
            </div>
        </div>

    <ul>

    @forelse($mensajes as $mensajesItem)
        <li>
            <!--Estructura de los mensajes-->
            <a id="mensaje_abrir" href="{{route('NuevoMensaje.show',$mensajesItem)}}">
                <div id="m_nombre">{{$mensajesItem->co}}</div>
                <div id="m_asunto">{{$mensajesItem->asunto}}</div>
                <div id="m_fecha">{{$mensajesItem->enviado}}</div>
            </a>
            <a id="mensaje_eliminar" href="{{route('Mensaje.destroy',$mensajesItem)}}">
                <div id="m_eliminar"><i id="i_e"class="fas fa-backspace"></i></div>
            </a>
    @empty

        </li>

    @endforelse   

    </ul>

    </div> 

    @endsection
