<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
    public function __construct() 
    {
        $this->middleware(['auth', 'usertype:admin']);
    }
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(StudentRequest $request)
    {
        $validated = $request->validated();

        if ($validated) {
            $student = Student::create($request->all());
            return redirect()->route('students.index');
        } else {
            return back()->withErrors($validated);
        }
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(StudentRequest $request, Student $student)
    {
        $validated = $request->validated();

        if ($validated) {
            $student->update($request->all());
            return redirect()->route('students.index')->with('success','Student updated successfully.');
        } else {
            return back()->withErrors($validated);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')
                        ->with('success','Student deleted successfully.');
    }
}
