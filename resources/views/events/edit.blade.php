@extends('layout')

@section('content')
    <form action="{{route('players.update',$event)}}" method="post">
        @csrf
        @method('put')

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{$event->name}}">
        <br>
        <label for="description">Descripción:</label>
        <input type="text" id="description" name="description" value="{{$event->description}}">
        <br>
        <label for="location">Ubicación:</label>
        <input type="text" id="location" name="location" value="{{$event->location}}">
        <br>
        <label for="map">Mapa:</label>
        <input type="text" id="map" name="map" value="{{$event->map}}">
        <br>
        <label for="date">Fecha:</label>
        <input type="date" id="date" name="date" value="{{$event->date}}">
        <br>
        <label for="time">Hora:</label>
        <input type="time" id="time" name="time" value="{{$event->time}}">
        <br>
        <label for="type">Tipo:</label>
        <select>
            <option value="oficial">Oficial</option>
            <option value="exhibition">Exhibición</option>
            <option value="charity">Charity</option>
        </select>
        <br>
        <label for="tags">Tags:</label>
        <input type="text" id="tags" name="tags" value="{{$event->tags}}">
        <br>
        <input type="submit" value="Editar Mensage">
    </form>
@endsection
