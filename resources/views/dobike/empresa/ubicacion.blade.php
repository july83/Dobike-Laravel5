@extends('layouts.principal')
@section('content')
<div class="container jumbotron estiloFormularios">
    <h2 class="titulo-Login">Ubicación</h2>
    <div class="container text-justify">
        <div id="coordenadas" data-lat="{{$lat}}" data-long="{{$long}}"></div>
        <div class="container direccion col-md-7">
            <p><b>Direccion:</b> {{$datos['Direccion']}}</p>
            <p><b>CP:</b> {{$datos['CP']}}</p>
            <p><b>Horario:</b> {{$datos['Horario_diario']}} / {{$datos['HorarioFS']}}</p>
            <h2 class="desred">TELÉFONO {{$datos['Telefono']}}</h2>
            <p>{{$datos['Comentarios']}}</p>
        </div>
        <div class="col-md-5">
            <div id="map" class="container"></div>
            <div class="container text-center">
                <small>lat: <b>{{$lat}}</b>  lng: <b>{{$long}}</b>  región: <b>{{$region}}</b></small>
            </div>
    </div>
</div>
@stop