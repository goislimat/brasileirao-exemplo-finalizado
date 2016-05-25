@extends('layouts.app')

@section('content')

    <h2>#{{ $team->id }}: {{ $team->name }}</h2>
    <h3>{{ $team->abbr }}</h3>
    <h4>{{ $team->stadium->name }} - {{ $team->stadium->city }} - {{ $team->state }}</h4>

    <h3>Lista de Jogadores do time</h3>

    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Posição</th>
            <th>Idade</th>
            <th>Nacionalidade</th>
        </tr>
        </thead>
        <tbody>
        @foreach($team->players as $player)
            <tr>
                <td>{{ link_to_route('player.show', $player->name, $player->id) }}</td>
                <td>{{ $player->position }}</td>
                <td>{{ $player->age }}</td>
                <td>{{ $player->nationality }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection