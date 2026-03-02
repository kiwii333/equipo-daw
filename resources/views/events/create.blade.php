@extends('layout')

@section('content')
    <form action="{{route('players.store')}}" method="post">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="description">Descripción:</label>
        <input type="text" id="description" name="description">
        <br>
        <label for="location">Ubicación:</label>
        <input type="text" id="location" name="location">
        <br>
        <label for="map">Mapa:</label>
        <input type="text" id="map" name="map">
        <br>
        <label for="date">Fecha:</label>
        <input type="date" id="date" name="date">
        <br>
        <label for="hora">Hora:</label>
        <input type="time" id="hora" name="hora">
        <br>
        <label for="type">Tipo:</label>
        <select>
            <option value="oficial"></option>
            <option value="exhibition"></option>
            <option value="charity"></option>
        </select>
        <br>
        <label for="tags">Tags:</label>
        <input type="text" id="tags" name="tags">
    </form>
@endsection

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error )
            <li> {{ $error }}</li>
        @endforeach
    </ul>
@endif



