@extends('layout')

@section('content')
    <form action="{{route('login')}}" method="post">
        @csrf

        <label for="username">Nombre de usuario:</label>
        <input type="text" name="username" id="username" value="{{old('username')}}"><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password"><br>

        <input type="sunmit" value="Enviar">
    </form>
    
@endsection
