<!----------NUEVO MENSAJE---------->
@extends('layouts.app')

@section('content')

<!--Contenedores principales del mensaje-->
     <div class="contenedor_escribir">

         <div class="nuevo_mensaje">

             <!--Form a llenar del mensaje a enviar-->
             <form method="post" action="{{ route('NuevoMensaje.store')}}" enctype="multipart/form-data">

                 <div class="titulo">Nuevo mensaje</div>

@csrf

                 <!--Area superior donde van los datos del mensaje-->
                 <div class="nm_head">
                     <input hidden id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="emailO" value="{{auth()->user()->email}}" autofocus readonly="readonly">

                     <input name="email" class="datos_head" value="{{$mensaje ?? '' ? $mensaje['co'] : '' }}" type="text" placeholder="Para" 
                     pattern="([a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5})+([,][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5})*">

                     <input id="mensaje"  name="asunto" type="text" value="{{$mensaje ?? '' ? 'RESPUESTA: '.$mensaje['asunto'] : '' }}" placeholder="Asunto" class="datos_head">
                 </div>
                  
                 <!--Area para seleccionar la prioiridad-->
                 <select name="prioridad" id="prioridad" class="datos_head">
                     <option {{ $mensaje ['prioridad']?? '' == 'Importante' ? 'selected' : ''}}>
                        Importante
                     </option>
                     <option {{ $mensaje ['prioridad']?? '' == 'Informativo' ? 'selected' : ''}}> 
                        Informativo
                     </option>
                     <option {{ $mensaje ['prioridad']?? '' == 'Solicitud' ? 'selected' : ''}}>
                        Solicitud
                     </option>
                 </select>

                 <!--Area de escritura-->
                 <textarea id="area_mensaje" name="mensaje" placeholder=""></textarea>

                 <!--Contenedor de los botones del form-->
                 <div class="nm_botones">
                     <button id="b_subm">Enviar</button>
                         <div class="upload-btn-wrapper">
                             <button id="b_norm">Adjuntar</button>
                             <input class="upload-file-buton" type="file">
                         </div>
                 </div>

             </form>

         </div>

     </div>

@endsection
