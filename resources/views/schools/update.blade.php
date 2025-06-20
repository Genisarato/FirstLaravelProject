
@extends('layouts.app')

@section('title', 'Edita escola')

@section('content')
    <div class="form-wrapper d-flex flex-column justify-content-center align-items-center">
        <div class="form-card card shadow-lg p-5 w-100" style="max-width: 600px;">
            <h2 class="text-center mb-4" style="color: var(--color-blau-escola); font-size: 2rem;">
                Edita l'escola {{ $school->name }}
            </h2>

            <form method="POST" action="{{ route('schools.update', $school) }}" id="schoolForm">
                @csrf
                @method('PUT')
                {{-- Nom --}}
                <div class="mb-4">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name" required maxlength="255" value="{{ old('name', $school->name) }}">
                </div>

                {{-- Adreça --}}
                <div class="mb-4">
                    <label for="address" class="form-label">Adreça</label>
                    <input type="text" class="form-control form-control-lg" id="address" name="address" required maxlength="255" value="{{ old('address', $school->address) }}">
                </div>

                {{-- Correu electrònic --}}
                <div class="mb-4">
                    <label for="email" class="form-label">Correu electrònic</label>
                    <input type="email" class="form-control form-control-lg" id="email" name="email" maxlength="255" value="{{ old('email', $school->email) }}">
                </div>

                {{-- Telèfon --}}
                <div class="mb-4">
                    <label for="phone" class="form-label">Telèfon</label>
                    <input type="text" class="form-control form-control-lg" id="phone" name="phone" maxlength="20" value="{{ old('phone', $school->phone) }}">
                </div>

                {{-- Web --}}
                <div class="mb-4">
                    <label for="website" class="form-label">Web</label>
                    <input type="text" class="form-control form-control-lg" id="website" name="website" maxlength="255" value="{{ old('website', $school->website) }}">
                </div>

                {{-- Logo (ruta o URL) --}}
                <div class="mb-4">
                    <label for="logo_path" class="form-label">Ruta del logo (opcional)</label>
                    <input type="text" class="form-control form-control-lg" id="logo_path" name="logo_path" maxlength="255" value="{{ old('logo_path', $school->logo_path) }}">
                </div>
            </form>
        </div>

        <div class="fixed-buttons">
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg">Tornar a la llista</a>
            <button type="submit" form="schoolForm" class="btn btn-success btn-lg">Edita escola</button>
        </div>
    </div>
@endsection
