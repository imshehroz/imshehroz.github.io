<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $students = Student::all(); // Fetch all student records
    return view('student.index', compact('students'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'name'=>'required|string',
        'cnic' => 'required|string|unique:students', 
        'phone'=>'required|string',
        'department'=>'required|string',
        'date_of_birth' => ['required', 'date', function ($attribute, $value, $fail) {
                $age = Carbon::parse($value)->age;
                if ($age < 18) {
                    $fail('The student must be at least 18 years old.');
                }
            }],
        'gender'=>'required|string',
        'address'=>'required|string'
        ]);

        $students = Student::create($data);

    if ($students) {
        return redirect()->route('student.index')->with('success', 'Student Record Created successfully!');
    } else {
        return redirect()->route('student.index')->with('error', 'Failed to create student');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::find($id);
        return view('student.view',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('student.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'cnic' => 'required|string|unique:students,cnic,' . $id, 
            'phone' => 'required|string',
            'department' => 'required|string',
            'date_of_birth' => ['required', 'date', function ($attribute, $value, $fail) {
                $age = Carbon::parse($value)->age;
                if ($age < 18) {
            return redirect()->route('student.index')->with('danger', 'Age must be 18 years or above!');
                }
            }],
            'gender' => 'required|string',
            'address' => 'required|string'
        ]);

        $students = Student::findOrFail($id);
        $students->update($data);

        return redirect()->route('student.index')->with('success', 'Student Record Updated Successfully!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::findOrFail($id);
        $students->delete();

        return redirect()->route('student.index')->with('success', 'Student Record DELETED Successfully!');
    }
}
