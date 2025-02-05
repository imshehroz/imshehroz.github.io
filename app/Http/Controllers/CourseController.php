<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $courses = Course::all(); // Fetch all course records
    return view('course.index', compact('courses'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'name'=>'required|string', 
        ]);

        $courses = Course::create($data);

    if ($courses) {
        return redirect()->route('course.index')->with('success', 'Course Created Successfully');
    } else {
        return redirect()->route('course.index')->with('error', 'Failed to create course');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $courses = Course::find($id);
        return view('course.view',compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $courses = Course::find($id);
        return view('course.edit', compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string', 
        ]);

        $courses = Course::findOrFail($id);
        $courses->update($data);

        return redirect()->route('course.index')->with('success', 'Course Updated Successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courses = Course::findOrFail($id);
        $courses->delete();

        return redirect()->route('course.index')->with('success', 'Course DELETED Successfully');
    }
}
