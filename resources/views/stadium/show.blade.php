@extends('layouts.app')

@section('content')

    <h2>#{{ $stadium->id }}: {{ $stadium->name }}</h2>
    <h3>Estádio para {{ $stadium->capicity }} torcedores</h3>
    <h4>Situado em {{ $stadium->cidade }}</h4>

@endsection