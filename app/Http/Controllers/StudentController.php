<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index():View
    {
        //
        $students = Student::paginate(5);
        return view('student.data', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);

        Student::create($request->all());

        return redirect()->route('student.data')
                         ->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $students)
    {
        //
        return view('student.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('student.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $students)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);

        $students->update($request->all());

        return redirect()->route('categories.index')
                         ->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $students)
    {
        //
        $students->delete();

        return redirect()->route('student.data')
                         ->with('success', 'Category deleted successfully.');
    }
}
