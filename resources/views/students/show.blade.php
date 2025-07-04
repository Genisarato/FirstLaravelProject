@extends('layouts.app')

@section('title', 'Detalls de ' . $student->name)

@section('content')
    <div class="content-wrapper">
        <div class="sections-container justify-content-center">
            <div class="school-card">
                <h3>{{ $student->name }}</h3>
                <div>
                    <p><strong>ID:</strong> {{ $student->id ?? 'N/A' }}</p>
                    <p><strong>Surname:</strong> {{ $student->surname ?? 'N/A' }}</p>
                    <p><strong>Ciutat natal:</strong> {{ $student->hometown ?? 'N/A' }}</p>
                    <p><strong>Estudia a: </strong><a href="{{ route('schools.show', $student->school->id) }}" class="text-blue-500 hover:underline">{{ $student->school->name }}</a></p>
                    <p><strong>Data de naixement:</strong> {{ $student->birthdate ?? 'N/A' }}</p>
                    <p><strong>Data de creació:</strong> {{ optional($student->created_at)->format('d/m/Y H:i') ?? 'N/A' }}</p>
                    <p><strong>Última actualització:</strong> {{ optional($student->updated_at)->format('d/m/Y H:i') ?? 'N/A' }}</p>
                </div>
                <div class="mt-auto">
                    <a href="{{ route('students.index') }}" class="btn">Tornar a la Llista</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Estàs segur que vols eliminar aquesta estudiant?')">Esborrar l'estudiant</button>
                    </form>                 
                    <a href="{{ route('students.edit', $student->id) }}" class="btn">Editar l'estudiant</a>
                </div>
            </div>
        </div>
    </div>
@endsection
