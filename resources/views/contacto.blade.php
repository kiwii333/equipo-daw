@extends('layout')

@section('content')
    <h1>Contacto</h1>
    <form action="">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    </form>
@endsection
