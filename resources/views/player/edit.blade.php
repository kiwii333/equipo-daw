@extends('layout')

@section('content')
    <form action="{{route('players.update', $player)}}" method="post">
        @csrf
        @method('put')

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{$player->name}}">
        <br>
        <label for="photo">Photo:</label>
        <input type="text" name="photo" id="photo" value="{{$player->photo}}">
        <br>
        <label for="twitter">Twitter:</label>
        <input type="text" name="twitter" id="twitter" value="{{$player->twitter}}">
        <br>
        <label for="instagram">Instagram:</label>
        <input type="text" name="instagram" id="instagram" value="{{$player->instagram}}">
        <br>
        <label for="twitch">Twitch:</label>
        <input type="text" name="twitch" id="twitch" value="{{$player->twitch}}">
        <br>
        <input type="submit" value="Modificar Jugador">
    </form>
@endsection
