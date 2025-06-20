@extends('layouts.app')

@section('title', 'Detalls de ' . $school->name)

@section('content')
    <div class="content-wrapper">
        <div class="sections-container justify-content-center">
            <div class="school-card">
                <h3>{{ $school->name }}</h3>
                <div>
                    <p><strong>ID:</strong> {{ $school->id ?? 'N/A' }}</p>
                    <p><strong>Adreça:</strong> {{ $school->address ?? 'N/A' }}</p>
                    <p><strong>Ciutat:</strong> {{ $school->city ?? 'N/A' }}</p>
                    <p><strong>Data de creació:</strong> {{ optional($school->created_at)->format('d/m/Y H:i') ?? 'N/A' }}</p>
                    <p><strong>Última actualització:</strong> {{ optional($school->updated_at)->format('d/m/Y H:i') ?? 'N/A' }}</p>
                </div>
                <div class="mt-auto">
                    <a href="{{ route('schools.index') }}" class="btn">Tornar a la Llista</a>
                    <a href="{{ route('schools.edit', $school->id) }}" class="btn">Editar l'escola</a>
                </div>
            </div>
        </div>
    </div>
@endsection
