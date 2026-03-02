@extends('layout')

@section('content')
    <div>
        Nombre: {{$mess->name}}
        <br>
        Asunto: {{$mess->subject}}
        <br>
        {{$mess->text}}
    </div>

@endsection
