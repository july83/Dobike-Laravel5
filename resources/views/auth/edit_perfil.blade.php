@extends('layouts.principal')
@section('content')
@include('alerts.errors')
<div class="container jumbotron estiloFormularios">
    <h1 class="titulo-Login">PERFIL DE {{ strtoupper($user->name) }}</h1>
        <div class="panel-body">
            <!--Form model, pasamos el usuario, de esta manera podemos visualizar los datos del usuario en el formulario-->
            {!!Form::model($user, ['route'=>['usuario.update', $user], 'method'=>'PUT'])!!}
                @include('formularios.contenido_registro')
                {!!Form::submit('MODIFICAR',['class'=>'btn btn-primary col-md-1 col-md-offset-4 boton_form_update'])!!}
            {!!Form::close()!!}
            {!!Form::open(['route'=>['usuario.destroy', $user], 'method'=>'DELETE'])!!}
                {!!Form::submit('ELIMINAR',['class'=>'btn btn-danger col-md-1 col-md-offset-2 boton_form_update'])!!}
            {!!Form::close()!!}
        </div>
</div>
@stop