@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

  <h1>Algum titulo</h1>
        @if(10 < 5)
        <p>A condição é true</p>
        @endif

        <p>{{ $nome }}</p>
@endsection