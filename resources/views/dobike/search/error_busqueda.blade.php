@extends('layouts.principal')
@section('content')
    <div class="container margen-contenido">
        <h2 class="tituloProducto">Resultados de búsqueda</h2>
        <h2 class="text-center text-danger">No se encontraron resultados, intentelo de nuevo</h2>
        <div class="text-justify " id="box-search">
        <figure class="text-center">
            <img src="{{asset('img/Fondo_404.png')}}" alt="sumo">
        </figure>
        </div>
    </div>
@stop