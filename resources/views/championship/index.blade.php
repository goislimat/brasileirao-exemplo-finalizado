@extends('layouts.app')

@section('content')

    <h2>Lista de Campeonatos</h2>

    <div class="text-right">
        {{ link_to_route('championship.create', 'Adicionar', array(), array('class' => 'btn btn-primary btn-sm')) }}
    </div>

    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Máximo de Equipes</th>
            <th>Premiação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($championships as $championship)
            <tr>
                <td>{{ link_to_route('championship.show', $championship->name, $championship->id) }}</td>
                <td>{{ $championship->type }}</td>
                <td>{{ $championship->number_of_teams }}</td>
                <td>R$ {{ number_format($championship->prize, 2, ",", ".") }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection