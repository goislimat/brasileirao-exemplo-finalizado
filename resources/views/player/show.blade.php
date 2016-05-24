@extends('layouts.app')

@section('content')

    <h2>#{{ $player->id }}: {{ $player->name }} - {{ $player->age }} anos</h2>
    <h3>{{ $player->position }}</h3>
    <h4>{{ $player->nationality }}</h4>

@endsection