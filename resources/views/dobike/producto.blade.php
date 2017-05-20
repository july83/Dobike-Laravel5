@extends('layouts.principal')
@section('content')
<div class="container jumbotron estiloFormularios texto-Producto">
    <div class="col-md-7">
        @if(Auth::check())   
            @if($producto->rebajas)
            <h1 class="porcentaje"><span class="text-capitalize"><b>{{$producto->porcentaje}} %</b></span></h1>
            @endif
        @endif
            <figure><img src="{{asset('img/productos/')}}/{{$producto->imagen}}" accesskey="" class="img-pro"></figure>
    </div>
    <div class="col-md-5">
        <h2 class="text-left"><b>{{$producto->nombre}}</b></h2>
        <p class="text-left">{{$producto->descripcion}}</p>
        <h2 class="text-left">
            @if(Auth::check())
                    @if($producto->rebajas)
                    <strong class="precioTachado">{{$producto->precio}} €</strong>
                    <strong class="precioBueno">{{$producto->precio - (($producto->precio * $producto->porcentaje) / 100)}} €</strong></p>
                    @else
                    <span class="text-primary"><b>{{$producto->precio}} €</b></span>
                    @endif
                @else
                    <span class="text-primary"><b>{{$producto->precio}} €</b></span>
                @endif
        </h2>
        <div>
            <div class="text-right">
                <h3><b>Volver a: 
                    <a href="/categoria/{{$producto->categoria->id}}" class="">{{$producto->categoria->nombre}}</a>
                    </b></h3>
            </div>
        </div>
    </div>
</div>
@stop