@extends('layouts.app')

@section('title', 'Crear estudiant')

@section('content')
    <div class="form-wrapper d-flex flex-column justify-content-center align-items-center">
        <div class="form-card card shadow-lg p-5 w-100" style="max-width: 600px;">
            <h2 class="text-center mb-4" style="color: var(--color-blau-escola); font-size: 2rem;">
                Crea un nou estudiant
            </h2>

            <form method="POST" action="{{ route('students.store') }}" id="studentForm">
                @csrf

                {{-- Nom --}}
                <div class="mb-4">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name" required maxlength="255" value="{{ old('name') }}">
                </div>

                {{-- Cognom--}}
                <div class="mb-4">
                    <label for="surname" class="form-label">Cognom</label>
                    <input type="text" class="form-control form-control-lg" id="surname" name="surname" required maxlength="255" value="{{ old('surname') }}">
                </div>

                {{-- Data de neiexement --}}
                <div class="mb-4">
                    <label for="birthdate" class="form-label">Data de neixement</label>
                    <input type="date" class="form-control form-control-lg" id="birthdate" name="birthdate"  value="{{ old('birthdate') }}">
                </div>

                {{-- Ciutat natal --}}
                <div class="mb-4">
                    <label for="hometown" class="form-label">Ciutat natal</label>
                    <input type="text" class="form-control form-control-lg" id="hometown" name="hometown" maxlength="255" value="{{ old('phone') }}">
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

        <div class="fixed-buttons">
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg">Tornar a la llista</a>
            <button type="submit" form="studentForm" class="btn btn-success btn-lg">Crear Estudiant</button>
        </div>
    </div>
@endsection
