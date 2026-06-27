<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Laravel\Mcp\Server\Attributes\Description;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('pages.admin.test.index', compact('students'));
    }

    public function create()
    {
        return view('pages.admin.test.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'description' => 'nullable'
        ]);

        $imagePath = null;
       if($request->hasFile('images')) {
        $imagePath = $request->file('images')->store('blog_images', 'public');
       }

       Student::create([
        'name' => $request->input('name'),
        'description' => $request->input('Description'),
        'image' => $imagePath,
       ]);


        return redirect()->route('test.index');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description
        ]);

        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        Student::destroy($id);

        return redirect()->route('students.index');
    }
}
