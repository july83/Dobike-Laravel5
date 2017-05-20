@extends('layouts.principal')
@section('content')
    <div class="container margen-contenido">
        @if(Session::get('route') == '/categoria')
            <h2 class="tituloProducto">Productos</h2>
        @else
    <h2 class="titulo-Login">{{\App\Categoria::find($id)->nombre}}</h2>
    @endif
    {!!Form::open(['route'=>'categoria.store', 'method'=>'POST'])!!}
        <select name="ordenar" id="ordena" class="form-control" onchange="this.form.submit()">
            <option value="" selected>Ordenar por:</option>
            <option value="alf">Orden Alfabético</option>
            <option value="asc">De más baratos a mas caros</option>
            <option value="desc">De más caros a más baratos</option>
        </select>
    {!!Form::close()!!}
        <div class="col-md-14">
            @foreach($productos as $producto)
            <div class="thumbnail caja_producto col-md-4" id="ordenaProductos">
                 <a href="/producto/{{$producto->id}}">
                <!--Compruebo si hay sesion usuario para mostrarle las rebajas o no-->
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
                {!!$productos->render()!!}
            </div>
        </div> 
    </div>
@stop