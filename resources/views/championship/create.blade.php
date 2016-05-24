@extends('layouts.app')

@section('content')

    <h2 class="text-center">Cadastrar Campeonatos</h2>

    <div class="col-md-offset-2 col-md-8">
        {{ Form::open(array('route' => array('championship.store'), 'method' => 'post')) }}

        <div class="form-group col-md-12">
            {{ Form::label('name', 'Nome:', array('class' => 'control-label')) }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('number_of_teams', 'Número de Equipes:', array('class' => 'control-label')) }}
            {{ Form::number('number_of_teams', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('type', 'Tipo:', array('class' => 'control-label')) }}
            {{ Form::select('type', $types, null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-12">
            {{ Form::label('prize', 'Premiaçao:', array('class' => 'control-label')) }}
            {{ Form::number('prize', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group text-right">
            {{ Form::submit('Concluir', array('class' => 'btn btn-primary')) }}
        </div>

        {{ Form::close() }}
    </div>
    
@endsection