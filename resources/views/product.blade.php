@extends('layouts.main')

@section('title', 'Produto Ext. - Tito Laravel')

@section('content')

    <h1>Busca de Produtos</h1>
    @if($busca != '')
    <p>O usuário está buscando: {{ $busca }}</p>
    @endif
    <a href="/">Voltar para home</a>
@endsection