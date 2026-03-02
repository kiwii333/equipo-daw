@extends('layout')

@section('content')
    <form action="{{route('players')}}" method="post">
        @csrf
        @method('put')

        <label for="visibility">Visibilidad:</label>
        <input type="text" >
    </form>
@endsection
