@extends('layouts.main')

@section('title', 'Home - Tito Laravel')

@section('content')

    <h1>Aprendendo Laravel</h1>
    <p>{{ $nome }}</p>
    @if($nome == 'Tito')
        <p>O nome está correto!</p>
    @else
        <p>O nome está errado<br> O nome é {{ $nome }} a sua idade é {{ $idade }} e a profissão é {{ $profissao }}</p>
    @endif
    @for($i = 0; $i < count($arr); $i++) 
        <p>{{ $arr[$i] }} - Pos: {{ $i }}</p>
    @endfor
    @foreach($carros as $carro)
        <p>{{ $loop->index }}</p>
        <p>{{ $carro }}</p>
    @endforeach

@endsection