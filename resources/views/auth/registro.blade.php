@extends('layouts.principal')
@section('content')
  
@include('alerts.errors')

<div class="container jumbotron estiloFormularios">
    <h1 class="titulo-Login">Regístro</h1>
        <div class="panel-body">
            {!!Form::open(['route'=>'usuario.store', 'method'=>'POST', 'class'=>'form-horizontal'])!!}
                @include('formularios.contenido_registro')
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-5">
                        <button type="submit" class="btn btn-primary botonlogin">
                            REGISTRATE
                        </button>
                    </div>
                </div>
            {!!Form::close()!!}
</div>
@stop