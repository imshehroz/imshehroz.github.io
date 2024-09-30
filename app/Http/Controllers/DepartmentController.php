<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $departments = Department::all(); // Fetch all department records
    return view('department.index', compact('departments'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'name'=>'required|string', 
        'location'=>'required|string',
        ]);

        $departments = Department::create($data);

    if ($departments) {
        return redirect()->route('department.index')->with('success', 'Department Created Successfully');
    } else {
        return redirect()->route('department.index')->with('error', 'Failed to create department');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $departments = Department::find($id);
        return view('department.view',compact('departments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $departments = Department::find($id);
        return view('department.edit', compact('departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string', 
            'location' => 'required|string',
        ]);

        $departments = Department::findOrFail($id);
        $departments->update($data);

        return redirect()->route('department.index')->with('success', 'Department Updated Successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $departments = Department::findOrFail($id);
        $departments->delete();

        return redirect()->route('department.index')->with('success', 'Department Deleted Successfully');
    }
}
