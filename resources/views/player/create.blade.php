@extends('layout')

@section('content')
    <form action="{{resource('players.store')}}" method="POST">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="photo">Photo:</label>
        <input type="text" name="photo" id="photo">
        <br>
        <label for="twitter">Twitter:</label>
        <input type="text" name="twitter" id="twitter">
        <br>
        <label for="instagram">Instagram:</label>
        <input type="text" name="instagram" id="instagram">
        <br>
        <label for="twitch">Twitch:</label>
        <input type="text" name="twitch" id="twitch">
        <br>
        <label for="visibility">Visibilidad:</label>
        <input type="checkbox" name="visibility" id="visibility">

        <br>
        <input type="submit" value="Guardar">
    </form>
@endsection

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error )
            <li> {{ $error }}</li>
        @endforeach
    </ul>
@endif
