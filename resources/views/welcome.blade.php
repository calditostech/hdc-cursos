@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
     <h1>Busque um evento</h1>
     <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Busque..">
     </form>
</div>
<div id="events-container" class="col-md-12">
      <h2>Próximos Eventos</h2>
          <p>Veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
          @foreach($eventos as $evento)
        <div class="card col-md-3">
            <img src="/img/eventos/{{ $evento->image }}" alt="{{$evento->titulo}}">
    <div class="card-body">
        <p class="card-date">10/09/2020</p>
        <h5 class="card-title">{{$evento->titulo}}</h5>
        <a href="/eventos/{{ $evento->id}}" class="btn btn-primary">Saber mais</a>
    </div>
  </div>
@endforeach
</div>
</div>
@endsection
