@extends('layouts.app')

@section('title', 'Test de Llista d\'Escoles (Memòria)')

@section('content')
    <h1>Prova de Memòria: Llista d'escoles</h1>
    <p>Si veus això, la vista es carrega.</p>
    <p>Nombre d'escoles (si la variable $schools està definida): {{ isset($schools) ? count($schools) : 'variable no definida' }}</p>

    {{-- No utilitzis el bucle @foreach per ara --}}
    {{-- No incloguis cap altre arxiu aquí per ara --}}

    <a href="{{ route('home') }}" class="btn btn-primary">Tornar a la Home</a>
@endsection
