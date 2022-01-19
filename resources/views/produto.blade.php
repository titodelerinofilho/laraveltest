@extends('layouts.main')

@section('title', 'Produtos - Tito Laravel')

@section('content')

    <h1>Produtos</h1>
    <p>O produto é: {{ $id }}</p>
    <a href="/">Voltar para home</a>
@endsection