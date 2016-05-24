@extends('layouts.app')

@section('content')

    <h2>#{{ $team->id }}: {{ $team->name }}</h2>
    <h3>{{ $team->abbr }}</h3>
    <h4>Estado: {{ $team->state }}</h4>

@endsection