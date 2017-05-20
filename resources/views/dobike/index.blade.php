@extends('layouts.principal')
@section('content')
@if(Session::has('info')) <!--azul-->
    @include('alerts.info')
@elseif(Session::has('success')) <!--verde-->
    @include('alerts.success')
@elseif(Session::has('danger')) <!--rojo-->
    @include('alerts.danger')
@endif
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @for($i=0; $i < count($categorias); $i++)
            @if($i === 0)
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active color"></li>
            @else
            <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="color"></li>
            @endif
        @endfor
    </ol>
    <div class="carousel-inner">
        @foreach($categorias as $categoria)
            @if($categoria->id === 1)
        <div class="item active">
            @else
            <div class="item">
            @endif
                <a href="/categoria/{{$categoria->id}}"><img src="{{asset('img/categorias')}}/{{$categoria->imagen}}" alt="imagen" class="img-fondo"></a>
            </div>
        @endforeach
            <a class="left carousel-control" href="#carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
            
    </div>
    
</div>
<div class="container margen-contenido">
            @foreach($productos as $producto)
            <div class="thumbnail caja_producto_reducido4 col-md-3" id="ordenaProductos">
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
        </div> 
<div id="overbox3">
    <div id="infobox3">
        <p>Esta web utiliza cookies para obtener datos estadísticos de la navegación de sus usuarios. Si continúas navegando consideramos que aceptas su uso.
        <a href="/politica_cookies">Más información</a>
        <a onclick="aceptar_cookies();" style="cursor:pointer;">X Cerrar</a></p>
    </div>
</div>
@stop