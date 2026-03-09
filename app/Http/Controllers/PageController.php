<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class PageController extends Controller
{
    public function home()
    {
        $students = Student::all();
        return view('home', compact('students'));
    }
    public function create()
    {
        return view('add-student');
    }

    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'course' => $request->course,
        ]);

        return redirect('/');
    }
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('edit-student', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update([
            'name' => $request->name,
            'course' => $request->course,
        ]);

        return redirect('/');
    }
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/');
    }
}
