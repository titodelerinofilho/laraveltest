@extends('layouts.main')

@section('title', $event->title)

@section('content')
    <div class="col-md-10 offsed-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{ $event->city }}</p>
                <p class="event-partipants"><ion-icon name="people-outline"></ion-icon>X Partipantes</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon>Dono do Evento</p>
                <a href="#" class="btn btn-primary">Marcar Presença</a>
            </div>
        </div>
    </div>
    
@endsection