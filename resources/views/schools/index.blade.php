@extends('layouts.app')

@section('title', 'Llista escoles')

@section('content')
    <h1 class="text-dark mb-4">Estàs a la secció d'escoles</h1>

    @if(isset($schools) && count($schools) > 0)
        <h2 class="mb-4">Llista d'Escoles:</h2>

        {{-- Contenedor con scroll --}}
        <div class="schools-list-container">
            <div class="row">
                @foreach($schools as $school)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('schools.show', $school->id) }}" class="card-link" style="text-decoration: none; color: inherit;">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body p-4">
                                    <h5 class="card-title mb-3">{{ $school->name }}</h5>
                                    <p class="card-text text-muted mb-2">Telèfon: {{ $school->phone ?? 'N/A' }}</p>
                                    <p class="card-text mb-2">Direcció: {{ $school->address ?? 'N/A' }}</p>
                                    <p class="card-text mb-2">Correu: {{ $school->email ?? 'N/A' }}</p>
                                </div>
                                <div class="card-footer bg-transparent border-top-0">
                                    <small class="text-muted">Clica per veure detalls</small>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p>No hi ha escoles per mostrar.</p>
    @endif

    {{-- Botons fixos a baix sempre --}}
    <div class="fixed-buttons">
        <a href="{{ route('home') }}" class="btn btn-primary btn-lg me-2 mb-2">Tornar a la Home</a>
        <a href="{{ route('schools.create') }}" class="btn btn-success btn-lg mb-2">Crea una escola</a>
    </div>
@endsection
