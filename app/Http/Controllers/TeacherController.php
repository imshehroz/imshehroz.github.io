<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $teachers = Teacher::all(); // Fetch all teacher records
    return view('teacher.index', compact('teachers'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'name'=>'required|string',
        'cnic' => 'required|string|unique:teachers', 
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

        $teachers = Teacher::create($data);

    if ($teachers) {
        return redirect()->route('teacher.index')->with('success', 'Teacher Created Successfully');
    } else {
        return redirect()->route('teacher.index')->with('error', 'Failed to create teacher');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teachers = Teacher::find($id);
        return view('teacher.view',compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $teachers = Teacher::find($id);
        return view('teacher.edit', compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'cnic' => 'required|string|unique:teachers,cnic,' . $id, 
            'phone' => 'required|string',
            'department' => 'required|string',
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

        $teachers = Teacher::findOrFail($id);
        $teachers->update($data);

        return redirect()->route('teacher.index')->with('success', 'Teacher Record Updated Successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teachers = Teacher::findOrFail($id);
        $teachers->delete();

        return redirect()->route('teacher.index')->with('success', 'Teacher DELETED Successfully');
    }
}
