@extends('layouts.main')

@section('title', 'Criar Evento - Tito Laravel')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Evento</label>
            <input type="file" id="image" name="image" class="form-control-file">    
        </div>
        <div class="form-group">
            <label for="title">Evento</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titulo do evento.">
        </div>
        <div class="form-group">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento.">
        </div>
        <div class="form-group">
            <label for="private">Evento Privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Informe os detalhes do evento."></textarea>
        </div>
        <div class="form-group">
            <label for="items">Adicionar itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Coffee Break"> Coffee Break
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </div>
    </form>
</div>

@endsection