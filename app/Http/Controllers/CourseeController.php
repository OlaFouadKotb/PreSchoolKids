<?php

namespace App\Http\Controllers;

use App\Models\Coursee;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseeController extends Controller
{
    public function index()
    {
        $coursees = Coursee::with('teacher')->get();
        return view('coursees', compact('coursees'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        return view('addCoursee',compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'teacherName' => 'required|string',
            'title' => 'required|string|max:255',
            'price' => 'required|integer',
            'age' => 'required|integer',
            'time' => 'required',
            'capacity' => 'required|integer|max:30',
            'TeacherImage' => 'nullable|image|max:2048',
        ]);

        $coursee = Coursee::create($request->all());

        if ($request->hasFile('TeacherImage')) {
            $path = $request->file('TeacherImage')->store('images', 'public');
            $coursee->TeacherImage = $path;
            $coursee->save();
        }

        return redirect()->route('coursees')->with('success', 'Coursee created successfully.');
    }

    public function show($id)
    {
        $coursee = Coursee::with('teacher')->findOrFail($id);
        return view('coursees.show', compact('coursee'));
    }

    public function edit($id)
    {
        $coursee = Coursee::findOrFail($id);
        $teachers = Teacher::all();
        return view('coursees.edit', compact('coursee', 'teachers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'teacher_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'price' => 'required|integer',
            'age' => 'required|integer',
            'time' => 'required',
            'capacity' => 'required|integer',
            'TeacherImage' => 'nullable|image|max:2048',
        ]);

        $coursee = Coursee::findOrFail($id);
        $coursee->update($request->all());

        if ($request->hasFile('TeacherImage')) {
            $path = $request->file('TeacherImage')->store('images', 'public');
            $coursee->TeacherImage = $path;
            $coursee->save();
        }

        return redirect()->route('coursees.index')->with('success', 'Coursee updated successfully.');
    }

    public function destroy($id)
    {
        $coursee = Coursee::findOrFail($id);
        $coursee->delete();
        return redirect()->route('coursees.index')->with('success', 'Coursee deleted successfully.');
    }
}
