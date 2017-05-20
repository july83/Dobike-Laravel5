@extends('layouts.principal')
@section('content')
@if(Session::has('info'))
    @include('alerts.info')
@elseif(Session::has('message'))
    @include('alerts.success')
@elseif(Session::has('message-error'))
    @include('alerts.errors')
@endif
    <div class="container margen-contenido">
        @if(Session::get('route') == '/categoria')
            <h2 class="titulotituloProducto">Productos</h2>
        @else
    <h2 class="tituloProducto">OFERTAS</h2>
    @endif
        <div class="col-md-14">
           
            @foreach($productos as $producto)
             <div class="thumbnail caja_producto col-md-4">
                <a href="/producto/{{$producto->id}}">
                <p class="porcentaje"><span class="text-capitalize">{{$producto->porcentaje}} %</span></p>
                <img src="{{asset('img/productos/')}}/{{$producto->imagen}}" accesskey="" class="img-cat">
                <div class="caption text-center">
                <p><span class="text-capitalize precio rebaja">{{$producto->nombre}}</span></p>
                <p>
                    <strong class="precioTachado">{{$producto->precio}} €</strong>
                    <strong class="precioBueno">{{$producto->precio - (($producto->precio * $producto->porcentaje) / 100)}} €</strong>
                </p>

                  </div>
                 </a>
            </div>
            @endforeach
            <!-- Paginación -->
            <div class="col-md-12 text-center pagina">
                {!!$productos->render()!!}
            </div>

        </div> 
    </div>

@stop

