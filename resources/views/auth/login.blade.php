@extends('layouts.principal',['categorias' => \App\Categoria::all()])

@section('content')
@if(Session::has('info')) <!--azul-->
    @include('alerts.info')
@elseif(Session::has('success')) <!--verde-->
    @include('alerts.success')
@elseif(Session::has('danger')) <!--rojo-->
    @include('alerts.danger')
@endif
@include('alerts.errors')
<div class="container jumbotron estiloFormularios">
    <h1 class="titulo-Login">Login</h1>
        <div class="panel-body">
            {!!Form::open(['url'=>'auth/login', 'method'=>'POST', 'class'=>'col-md-6 col-md-offset-3 text-center'])!!}
                <div class="form-group-lg">
                    {!!Form::label('Correo:')!!}
                    {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Correo Electronico...'])!!}
                </div>
                <div class="form-group-lg">
                    {!!Form::label('Password:')!!}
                    {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Contraseña...'])!!}
                </div>
                 {!!Form::submit('LOGIN',['class'=>'btn btn-primary botonlogin'])!!}
                <a href="/usuario/create" class="btn btn-success botonlogin">REGÍSTRATE</a>
            {!!Form::close()!!}
        </div>
</div>
@stop