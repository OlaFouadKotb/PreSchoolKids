<?php

namespace App\Http\Controllers;

use App\Models\Coursee;
use App\Models\Kid;

use App\Models\Guardian;
use Illuminate\Http\Request;

class KidController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $kids = Kid::all();
        return view("kidsList", compact("kids"));}

    // Show the form for creating a new resource.
    public function create()
    {
       // $classes = Coursee::all();
        //$guardians = Guardian::all();
        return view('addKid');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'age' => 'required|integer',
            'class_id' => 'required|array',
            'guardian_id' => 'required|integer',
            'active' => 'required|boolean',
            'image' => 'nullable|image|max:2048',
        ]);

        $kid = Kid::create($request->all());

        if ($request->has('class_id')) {
            $kid->coursees()->sync($request->class_id);
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $kid->image = $path;
            $kid->save();
        }

        return redirect()->route('kids')->with('success', 'Kid created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $kid = Kid::with('ciasses', 'guardians')->findOrFail($id);
        return view('kids.show', compact('kid'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $kid = Kid::findOrFail($id);
        $classes = Coursee::all();
        $guardians = Guardian::all();
        return view('kids.edit', compact('kid', 'ciasses', 'guardians'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'age' => 'required|integer',
            'class_id' => 'required|array',
            'guardian_id' => 'required|integer',
            'active' => 'required|boolean',
            'image' => 'nullable|image|max:2048',
        ]);

        $kid = Kid::findOrFail($id);
        $kid->update($request->all());

        if ($request->has('class_id')) {
            $kid->ciasses()->sync($request->class_id);
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $kid->image = $path;
            $kid->save();
        }

        return redirect()->route('kids')->with('success', 'Kid updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $kid = Kid::findOrFail($id);
        $kid->delete();
        return redirect()->route('kids')->with('success', 'Kid deleted successfully.');
    }

    // Display a list of trashed (soft deleted) kids.
    public function trash()
    {
        $kids = Kid::onlyTrashed()->with('ciasses', 'guardian')->get();
        return view('kids.trash', compact('kids'));
    }
}
