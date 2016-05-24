@extends('layouts.app')

@section('content')

    <h2>Lista de Estádios</h2>

    <div class="text-right">
        {{ link_to_route('stadium.create', 'Adicionar', array(), array('class' => 'btn btn-primary btn-sm')) }}
    </div>

    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Capacidade</th>
            <th>Cidade</th>
        </tr>
        </thead>
        <tbody>
        @foreach($stadia as $stadium)
            <tr>
                <td>{{ link_to_route('stadium.show', $stadium->name, $stadium->id) }}</td>
                <td>{{ number_format($stadium->capacity, 0, ',', '.') }}</td>
                <td>{{ $stadium->city }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection