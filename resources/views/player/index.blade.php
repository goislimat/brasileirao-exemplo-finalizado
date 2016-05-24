@extends('layouts.app')

@section('content')

    <h2>Lista de Jogadores</h2>

    <div class="text-right">
        {{ link_to_route('player.create', 'Adicionar', array(), array('class' => 'btn btn-primary btn-sm')) }}
    </div>

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
        @foreach($players as $player)
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