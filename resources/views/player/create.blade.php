@extends('layouts.app')

@section('content')

    <h2 class="text-center">Cadastrar Jogadores</h2>

    <div class="col-md-offset-2 col-md-8">
        {{ Form::open(array('route' => array('player.store'), 'method' => 'post')) }}

        <div class="form-group col-md-12">
            {{ Form::label('name', 'Nome:', array('class' => 'control-label')) }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('age', 'Idade:', array('class' => 'control-label')) }}
            {{ Form::number('age', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('position', 'Posição:', array('class' => 'control-label')) }}
            {{ Form::select('position', $positions, null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-12">
            {{ Form::label('nationality', 'Nacionalidade:', array('class' => 'control-label')) }}
            {{ Form::text('nationality', 'Brasileiro', array('class' => 'form-control')) }}
        </div>

        <div class="form-group text-right">
            {{ Form::submit('Concluir', array('class' => 'btn btn-primary')) }}
        </div>

        {{ Form::close() }}
    </div>
    
@endsection