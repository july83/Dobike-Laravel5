@extends('layouts.principal')
@section('content')
    <div class="container margen-contenido">
        <h2 class="tituloProducto">Resultados de la búsqueda</h2>
        <div class="col-md-14">
            @foreach($productos as $producto)
            <div class="thumbnail caja_producto col-md-4" id="ordenaProductos">
                 <a href="/producto/{{$producto->id}}">
                @if(Auth::check())   
                    @if($producto->rebajas)
                    <p class="porcentaje"><span class="text-capitalize">{{$producto->porcentaje}} %</span></p>
                    @endif
                @endif
                 <img src="{{asset('img/productos/')}}/{{$producto->imagen}}" accesskey="" class="img-cat">
                  <div class="caption text-center">
                <p><span class="text-capitalize precio rebaja">{{$producto->nombre}}</span></p>
                @if(Auth::check())
                    @if($producto->rebajas)
                    <p><strong class="precioTachado">{{$producto->precio}} €</strong>
                        <strong class="precioBueno">{{$producto->precio - (($producto->precio * $producto->porcentaje) / 100)}} €</strong></p>
                    @else
                    <p><strong>{{$producto->precio}} €</strong></p>
                    @endif
                @else
                    <p><strong>{{$producto->precio}} €</strong></p>
                @endif
                  </div>
                 </a>
            </div>
            @endforeach
            <!-- Paginación -->
            <div class="col-md-12 text-center pagina">
                {!!$productos->appends(['producto' => $palabraBuscada])->render()!!}
            </div>

        </div> 
    </div>
@stop

