@extends('layout')

@section('content')

    <h1>Eventos</h1>
    @foreach ($events as $event )
        @if (Auth::check())
        <a href="{{route('events.show',$event)}}">{{$event->name}}</a>
            @isadmin
                <a href="{{route('players.edit')}}">Editar usuario</a>
            @endisadmin
        @else
        <a href="{{route('auth.login')}}">Inicia sesión</a>
        <a href="{{route('auth.signup')}}">Registrarse</a>

        @endauth
    @endforeach
@endsection
