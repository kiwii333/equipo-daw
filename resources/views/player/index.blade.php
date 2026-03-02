@extends('layout')

@section('content')
    <div>
        @foreach ($players as $player )
            <h1>{{$player->name}}</h1>
            <img src="/storage/{{$player->photos}}" alt="Foto de: {{$player->name}}">
            @if (Auth::check())
                <a href="{{route('players.show',$event)}}">Ficha</a>
                @isadmin
                    <a href="{{route('players/edit_visibility')}}">Editar visibilidad</a>
                @endisadmin
            @endauth
        @endforeach
    </div>
@endsection
