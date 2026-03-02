@extends('layout')

@section('content')
    <h1>Lista de mensages</h1>
    @foreach ($messages as $mess )
        @if ({{$mess->readed = false}}){
            <p>{{$mess->name}}</p>
            <br>
            <p>Asunto: {{$mess->subject}}</p>
            <br>
            <p>No leído</p>
            <br>
            <a href="route{{'message.show'}}">Ver información</a>
        }

        @endif
        <div>
            <p>{{$mess->name}}</p>
            <br>
            <p>Asunto: {{$mess->subject}}</p>
            <br>
            <a href="route{{'message.show'}}">Ver información</a>
        </div>
    @endforeach
    <a href="{{route('messages.destroy')}}">Eliminar Mensage</a>
@endsection
