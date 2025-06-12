<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'hometown' => 'nullable|string|max:255',
            'school_id' => 'required|integer|exists:schools,id',
        ]);

        $student = Student::create($validatedData);
        return redirect()->route('student.show', $student->id)->with('success', 'Estudiant creat amb èxit.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student): View
    {
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student): View
    {
        $school = School::all(); //
        return view('student.edit', compact('student', 'student')); // <-- La vista ha de ser 'student.edit'
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'hometown' => 'nullable|string|max:255',
            'school_id' => 'required|integer|exists:schools,id',
        ]);
        $student->update($validatedData);
        return redirect()->route('students.index')->with('success', 'Estudiant actualitzat correctament.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Estudiant eliminat correctament.');
    }
}
