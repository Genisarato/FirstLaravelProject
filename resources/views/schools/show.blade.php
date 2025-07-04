@extends('layouts.app')

@section('title', 'Detalls de ' . $school->name)

@section('content')
    <div class="content-wrapper">
        <div class="sections-container justify-content-center">
            <div class="school-card">
                <h3>{{ $school->name }}</h3>
                <div>
                    @if(isset($school->logo_path) && $school->logo_path)
                        <img src="{{ asset('storage/' . $school->logo_path) }}"
                                alt="Logo de {{ $school->name }}"
                                class="w-16 h-16 rounded-full block mx-auto mb-4 object-cover border-2 border-indigo-200"
                                onerror="this.onerror=null; this.src='https://placehold.co/64x64/9FA8DA/FFFFFF?text={{ urlencode(mb_substr($school->name, 0, 1)) }}';">
                    @endif
                    <p><strong>ID:</strong> {{ $school->id ?? 'N/A' }}</p>
                    <p><strong>Adreça:</strong> {{ $school->address ?? 'N/A' }}</p>
                    <p><strong>Correu:</strong> {{ $school->email ?? 'N/A' }}</p>
                    <p><strong>Telèfon:</strong> {{ $school->address ?? 'N/A' }}</p>
                    <p class="card-text mb-2">Pàgina web: <a href="https://www.google.com/search?q={{ urlencode($school->website) }}" target="_blank" class="text-blue-500 hover:underline">{{$school->website ?? 'N/A' }}</a></p>
                    <p><strong>Data de creació:</strong> {{ optional($school->created_at)->format('d/m/Y H:i') ?? 'N/A' }}</p>
                    <p><strong>Última actualització:</strong> {{ optional($school->updated_at)->format('d/m/Y H:i') ?? 'N/A' }}</p>
                </div>
                <div class="mt-auto">
                    <a href="{{ route('schools.index') }}" class="btn">Tornar a la Llista</a>
                    <form action="{{ route('schools.destroy', $school->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Estàs segur que vols eliminar aquesta escola?')">Esborrar l'escola</button>
                    </form>
                    <a href="{{ route('schools.edit', $school->id) }}" class="btn">Editar l'escola</a>
                </div>
            </div>
        </div>
    </div>
@endsection
