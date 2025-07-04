<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
//use Intervention\Image\Laravel\Facades\Image;


class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $schools = School::paginate(10);
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
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20', 
            'website' => 'nullable|url|max:255',
            'logo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048|dimensions:min_width=0,min_height=0,max_width=300,max_height=300',
        ]);



        if ($request->hasFile('logo')) {
            // Opcional: Eliminar el logo antiguo si existe

            $path = $request->file('logo')->store('logos', 'public');
            $validatedData['logo_path'] = $path;
            unset($validatedData['logo']);
        }

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
            'email' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20', 
            'website' => 'nullable|url|max:255',
            'logo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048|dimensions:min_width=0,min_height=0,max_width=300,max_height=300',
        ]);

        if ($request->hasFile('logo')) {
            
            if ($school->logo_path){
                Storage::disk('public')->delete($school->logo_path);
                $school->logo_path = null;
            }
            $path = $request->file('logo')->store('logos', 'public');
            $validatedData['logo_path'] = $path;
            unset($validatedData['logo']);
        }

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
