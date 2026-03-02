@extends('layout')

@section('content')

    {{Auth::user()->name
                  ->middleware('auth')
    }}
    {{Auth::user()->username}}
    {{Auth::user()->email}}

@endsection
