<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $schools = School::all();
        return view('schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'logo_path' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20', //
            'website' => 'nullable|string|max:255',
        ]);
        $school = School::create($validatedData);
        return redirect()->route('schools.show', $school->id)->with('success', 'Escola creada amb èxit.');
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school): View
    {
        return view('schools.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $school = School::findOrFail($id);
        return view('schools.update', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, School $school): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'logo_path' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20', //
            'website' => 'nullable|string|max:255',
        ]);
        $school->update($validatedData);
        return redirect()->route('schools.index')->with('success', 'Escola actualtizada correctament.');

        /*
         * El punt del route ens indica el path dins de la carpeta de resources/views/ el que sigue, si volguessim tenir més d'una
         * vista, podriem directament ficar schools. el que sigui, indiquem quina vista dins del path tornem.
         */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school): RedirectResponse
    {
        $school->delete();
        return redirect()->route('schools.index')->with('success', 'Escola eliminada correctament.');
    }
}
