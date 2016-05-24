@extends('layouts.app')

@section('content')

    <h2>Lista de Equipes</h2>

    <div class="text-right">
        {{ link_to_route('team.create', 'Adicionar', array(), array('class' => 'btn btn-primary btn-sm')) }}
    </div>

    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Estado</th>
            <th>Abrevição</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
            <tr>
                <td>{{ link_to_route('team.show', $team->name, $team->id) }}</td>
                <td>{{ $team->state }}</td>
                <td>{{ $team->abbr }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection