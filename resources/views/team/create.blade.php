@extends('layouts.app')

@section('content')

    <h2 class="text-center">Cadastrar Equipe</h2>

    <div class="col-md-offset-2 col-md-8">
        {{ Form::open(array('route' => array('team.store'), 'method' => 'post')) }}

        <div class="form-group col-md-12">
            {{ Form::label('name', 'Nome:', array('class' => 'control-label')) }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('abbr', 'Abreviação:', array('class' => 'control-label')) }}
            {{ Form::text('abbr', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('state', 'Estado:', array('class' => 'control-label')) }}
            {{ Form::select('state', $states, null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group text-right">
            {{ Form::submit('Concluir', array('class' => 'btn btn-primary')) }}
        </div>

        {{ Form::close() }}
    </div>
    
@endsection