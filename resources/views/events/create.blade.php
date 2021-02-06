@extends('layouts.main')

@section('title', 'Criar Evento')

@section ('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
<h1>Crie um evento</h1>
<form action="/eventos" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="title">Imagem do evento:</label>
    <input type="file" class="form-control-file" id="image" name="image" placeholder="Upload da imagem">
</div>
<div class="form-group">
    <label for="title">Evento:</label>
    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento">
</div>
<div class="form-group">
    <label for="title">Cidade:</label>
    <input type="text" class="form-control" id="titulo" name="cidade" placeholder="Local do evento">
</div>
<div class="form-group">
    <label for="title">O evento é privado?</label>
   <select name="private" id="private" class="form-control">
       <option value="0">Não</option>
       <option value="1">Sim</option>
   </select>
</div>
<div class="form-group">
    <label for="title">Descricao:</label>
    <textarea  name="descricao" id="descricao" placeholder="Descricao do evento">
    </textarea>
</div>
<input type="submit" class="btn btn-primary" value="Criar evento">
</form>
</div>
@endsection