@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
     <h1>Busque um evento</h1>
     <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Busque..">
     </form>
</div>
<div id="events-container" class="col-md-12">
      @if($search)
      <h2>Buscando por: {{ $search }}</h2>
      @else
      <h2>Próximos Eventos</h2>
      @endif
          <p>Veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
          @foreach($eventos as $evento)
        <div class="card col-md-3">
            <img src="/img/eventos/{{ $evento->image }}" alt="{{$evento->titulo}}">
    <div class="card-body">
        <p class="card-date">{{ date('d/m/y', strtotime($evento->date)) }}</p>
        <h5 class="card-title">{{$evento->titulo}}</h5>
        <a href="/eventos/{{ $evento->id}}" class="btn btn-primary">Saber mais</a>
    </div>
  </div>
@endforeach
@if(count($eventos) == 0 && $search)
     <p>Não foi possivel encontrar nenhum evento com  {{ $search }}! <a href="/">Ver todos</p>
@elseif(count($eventos) == 0)
     <p>Não há eventos disponiveis</p>
@endif
</div>
</div>
@endsection
