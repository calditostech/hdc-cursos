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
    <label for="date">Data do evento:</label>
    <input type="date" class="form-control" id="date" name="date" placeholder="Nome do evento">
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
    <div class="form-group">
    <label for="title">Adicione itens de infraestrutura:</label>
    <div class="form-group">
    <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
    </div>
    <div class="form-group">
    <input type="checkbox" name="items[]" value="Palco">Palco
    </div>
    <div class="form-group">
    <input type="checkbox" name="items[]" value="Cerveja gratis">Cerveja grátis
    </div>
    <div class="form-group">
    <input type="checkbox" name="items[]" value="Brindes">Brindes
    </div>
    <div class="form-group">
    <input type="checkbox" name="items[]" value="Open food">Open food
    </div>
</div>
<input type="submit" class="btn btn-primary" value="Criar evento">
</form>
</div>
@endsection