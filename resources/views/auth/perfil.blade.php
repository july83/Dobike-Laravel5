@extends('layouts.principal')
@section('content')
    @if(Session::has('message'))
        @include('alerts.success')
    @elseif(Session::has('info'))
        @include('alerts.info')
    @endif
    <div class="container margen-contenido">
        <h2 class="titulo-Login"><span class="glyphicon glyphicon-user"></span> Bienvenido a tu Perfil</h2>
        <div class="perfil">
            <div class="col-md-6 text-center">
                <img src="{{url('img/perfil.jpg')}}" alt="perfil del cocinero">
            </div>
            <div class="col-md-6 text-justify perfil-texto estilosPerfil">
                <p><b>Nombre:</b> {{$usuario->name}}</p>
                <p><b>Apellidos:</b> {{$usuario->apellidos}}</p>
                <p><b>Email:</b> {{$usuario->email}}</p>
                <p><b>Direccion:</b> {{$usuario->direccion}}</p>
                <p><b>Localidad:</b> {{$usuario->localidad}}</p>
                <p><b>CP:</b> {{$usuario->cp}}</p>
                {!!link_to_route('usuario.edit', $title = 'Editar perfil', $parameters = $usuario->id, $attributes = ['class'=>'btn btn-primary  col-md-4'])!!}
            </div>
            
            </div>
        
    </div>
@stop