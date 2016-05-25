@extends('layouts.app')

@section('content')

    <h2 class="text-center">Cadastrar Estádios</h2>

    <div class="col-md-offset-2 col-md-8">
        {{ Form::open(array('route' => array('stadium.store'), 'method' => 'post')) }}

        <div class="form-group col-md-12">
            {{ Form::label('name', 'Nome:', array('class' => 'control-label')) }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-12">
            {{ Form::label('team_id', 'Equipe propietária:', array('class' => 'control-label')) }}
            {{ Form::select('team_id', $teams, null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('capacity', 'Capacidade:', array('class' => 'control-label')) }}
            {{ Form::number('capacity', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('city', 'Cidade:', array('class' => 'control-label')) }}
            {{ Form::text('city', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group text-right">
            {{ Form::submit('Concluir', array('class' => 'btn btn-primary')) }}
        </div>

        {{ Form::close() }}
    </div>
    
@endsection