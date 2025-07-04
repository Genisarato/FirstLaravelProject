
@extends('layouts.app')

@section('title', 'Edita estudiant')

@section('content')
    <div class="form-wrapper d-flex flex-column justify-content-center align-items-center">
        <div class="form-card card shadow-lg p-5 w-100" style="max-width: 600px;">
            <h2 class="text-center mb-4" style="color: var(--color-blau-escola); font-size: 2rem;">
                Edita l'estudiant {{ $student->name }}
            </h2>

            <form method="POST" action="{{ route('students.update', $student) }}" id="studentForm">
                @csrf
                @method('PUT')
                {{-- Nom --}}
                <div class="mb-4">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name" required maxlength="255" value="{{ old('name', $student->name) }}">
                </div>

                {{-- Surname --}}
                <div class="mb-4">
                    <label for="surname" class="form-label">Cognom</label>
                    <input type="text" class="form-control form-control-lg" id="surname" name="surname" required maxlength="255" value="{{ old('surname', $student->surname) }}">
                </div>

                {{-- Data de neixement --}}
                <div class="mb-4">
                    <label for="birthdate" class="form-label">Data de naixement</label>
                    <input type="date" class="form-control form-control-lg" id="birthdate" name="birthdate" maxlength="255" value="{{ old('birthdate', $student->birthdate) }}">
                </div>

                {{-- Ciutat natal --}}
                <div class="mb-4">
                    <label for="hometown" class="form-label">Ciutat natal</label>
                    <input type="text" class="form-control form-control-lg" id="hometown" name="hometown" maxlength="20" value="{{ old('hometown', $student->hometown) }}">
                </div>

                {{-- Escola --}}
                <div class="mb-4">
                    <label for="school_id" class="form-label">Escola</label>
                    <select class="form-select form-control-lg" id="school_id" name="school_id">
                        @foreach($schools as $school)
                            <option value="{{ $school->id }}" {{ old('school_id') == $school->id ? 'selected' : '' }}>
                                {{ $school->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>

        <div class="mt-auto">
        <div class="fixed-buttons">
            <a href="{{ route('students.index') }}" class="btn">Tornar a la Llista</a>
            <button type="submit" form="studentForm" class="btn btn-success btn-lg">Edita estudiant</button>
        </div>
        </div>
    </div>
@endsection
