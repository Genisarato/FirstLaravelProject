@extends('layouts.app')

@section('title', 'Llista estudiants')

@section('content')
    <h1 class="text-dark mb-4">Estàs a la secció d'estudiants</h1>

    @if(isset($students) && count($students) > 0)
        <h2 class="mb-4">Llista d'estudiants:</h2>

        {{-- Contenedor con scroll --}}
        <div class="schools-list-container">
            <div class="row">
                @foreach($students as $student)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('students.show', $student->id) }}" class="card-link" style="text-decoration: none; color: inherit;">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body p-4">
                                    <h5 class="card-title mb-3">{{ $student->name }}</h5>
                                    <p class="card-text text-muted mb-2">Cognom: {{ $student->surname }}</p>
                                    <p class="card-text mb-2">Data de naiexement: {{ $student->birthdate }}</p>
                                    <p class="card-text mb-2">Ciutat de naixement: {{ $student->hometown ?? 'N/A' }}</p>
                                    <p class="card-text mb-2">Estudia a: {{ $student->school->name }}</p>
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
        <div class="d-flex justify-content-center mt-4"> 
            {{ $students->links() }}
        </div>
    @else
        <p>No hi ha estudiants per mostrar.</p>
    @endif

    {{-- Botons fixos a baix sempre --}}
    <div class="fixed-buttons">
        <a href="{{ route('home') }}" class="btn btn-primary btn-lg me-2 mb-2">Tornar a la Home</a>
        <a href="{{ route('students.create') }}" class="btn btn-success btn-lg mb-2">Crea un nou estudiant</a>
    </div>
@endsection
