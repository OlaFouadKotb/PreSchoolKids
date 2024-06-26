<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // Fetch all teachers from the database
    $teachers = Teacher::all();

    // Return a view with the fetched teachers data
    return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addTeacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'fullName' => 'required|string|max:255',
        'image' => 'nullable|image|max:2048',
        'phone' => 'required|string|max:20',
        'facebook' => 'nullable|string|max:255',
        'twitter' => 'nullable|string|max:255',
        'instagram' => 'nullable|string|max:255',
    ]);

    // Create a new teacher record in the database
    $teacher = Teacher::create($request->all());

    // Handle image upload if provided
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('teachers', 'public');
        $teacher->image = $path;
        $teacher->save();
    }

    // Redirect back to the index page with success message
    return redirect()->route('teachers.index')->with('success', 'Teacher added successfully.');
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         // Find the teacher by ID from the database
    $teacher = Teacher::findOrFail($id);

    // Return a view with the teacher details
    return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // Find the teacher by ID from the database
    $teacher = Teacher::findOrFail($id);

    // Return a view with the edit form and teacher data
    return view('teachers.edit', compact('teacher'));
}
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    // Validate the incoming request data
    $request->validate([
        'fullName' => 'required|string|max:255',
        'image' => 'nullable|image|max:2048',
        'phone' => 'required|string|max:20',
        'facebook' => 'nullable|string|max:255',
        'twitter' => 'nullable|string|max:255',
        'instagram' => 'nullable|string|max:255',
    ]);

    // Find the teacher by ID from the database
    $teacher = Teacher::findOrFail($id);

    // Update the teacher record with new data
    $teacher->update($request->all());

    // Handle image upload if provided
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('teachers', 'public');
        $teacher->image = $path;
        $teacher->save();
    }

    // Redirect back to the index page with success message
    return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      // Find the teacher by ID from the database
      $teacher = Teacher::findOrFail($id);

      // Delete the teacher record from the database
      $teacher->delete();
  
      // Redirect back to the index page with success message
      return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');
  }
    }
