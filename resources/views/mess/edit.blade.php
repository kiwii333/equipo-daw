@extends('layout')

@section('content')
    <form action="{{route('mess.update',$mess)}}" method="POST">
        @csrf
        @method('put')

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{$mess->name}}">
        <br>
        <label for="subject">Asunto</label>
        <input type="text" name="email" id="email" value="{{$mess->subject}}">
        <br>
        <label for="text">Texto</label>
        <input type="text" name="text" id="text" value="{{$mess->text}}">
        <br>
        <input type="submit" value="Editar Mensage">
    </form>
@endsection
