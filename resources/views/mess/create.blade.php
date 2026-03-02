@extends('layout')

@section('content')
    <form action="{{route('mess.store')}}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="subject">Asunto</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="text">Texto</label>
        <input type="text" name="text" id="text">
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
