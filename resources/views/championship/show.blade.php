@extends('layouts.app')

@section('content')

    <h2>#{{ $championship->id }}: {{ $championship->name }}</h2>
    <h3>{{ $championship->type }} - Premiação: R$ {{ number_format($championship->prize, 2, ",", ".") }}</h3>
    <h4>Quantidade de Equipes: {{ $championship->number_of_teams }}</h4>

@endsection