@extends('layout')

@section('content')
    <div>
        <p>{{$event->name}}</p>
        <p>{{$event->description}}</p>
        <p>Ubicación {{$event->location}}</p>
        <p>Mapa {{$event->map}}</p>
        <p>Fecha {{$event->date}}</p>
        <p>Hora {{$event->hora}}</p>

        @if (Auth::check())
            <a href="">Me gusta</a>
            <a href="">Borrar Me gusta</a>
        @endif

    </div>
@endsection
