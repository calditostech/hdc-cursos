@extends('layouts.main')

@section('title', 'Sobre o evento')

@section ('content')

@foreach($eventos as $evento)
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/eventos/{{ $evento->image }}" class="img-fluid" alt="{{ $evento->titulo }}">
        </div>
    <div id="info-container" class="col-md-6"></div>
    <h1>{{$evento->titulo}}</h1>
    <p class="evento-cidade"><ion-icon name="location-outline"></ion-icon>{{$evento->cidade}}</p>
    <p class="evento-participantes"><ion-icon name="people-outline"></ion-icon> x Participantes</p>
    <p class="evento-owner"><ion-icon name="star-outline"></ion-icon> Dono do evento</p>
    <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
    <h3>O evento conta com:</h3>
    <ul id="items-list">
     @foreach($evento->items as $item)
     <li><ion-icon name="play-outline"></ion-icon><span>{{ $item }}</span></li>
     @endforeach
    </ul>
    </div>
    <div class="col-md-12" id="description-container">
        <h3>Sobre o evento:</h3>
    <p class="event-description">{{$evento->descricao}}</p>
</div>
</div>
</div>
@endforeach
@endsection