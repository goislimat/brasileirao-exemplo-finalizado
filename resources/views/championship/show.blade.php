@extends('layouts.app')

@section('content')

    <h2>#{{ $championship->id }}: {{ $championship->name }}</h2>
    <h3>{{ $championship->type }} - Premiação: R$ {{ number_format($championship->prize, 2, ",", ".") }}</h3>
    <h4>Quantidade de Equipes: {{ $championship->number_of_teams }}</h4>

    <hr>

    <h2>Equipes registradas nesse campeonato</h2>

    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Estado</th>
            <th>Abrevição</th>
        </tr>
        </thead>
        <tbody>
        @foreach($championship->teams as $team)
            <tr>
                <td>{{ link_to_route('team.show', $team->name, $team->id) }}</td>
                <td>{{ $team->state }}</td>
                <td>{{ $team->abbr }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <hr>

    {{ Form::open(array('route' => array('championship.add.team', $championship->id), 'method' => 'post')) }}

    <div class="form-group">
        {{ Form::label('team_id', 'Equipe:', array('class' => 'control-label')) }}
        {{ Form::select('team_id', $teams, null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::submit('Adicionar Equipe', array('class' => 'btn btn-primary btn-sm')) }}
    </div>

    {{ Form::close() }}

@endsection