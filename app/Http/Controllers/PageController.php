<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class PageController extends Controller
{
    // Search student by name or course
    public function home(Request $request)
    {
        $search = $request->search;

        $students = Student::query();

        if ($search) {
            $students->where('name', 'like', "%$search%")
                ->orWhere('course', 'like', "%$search%");
        }

        // only shows 7 students per page
        $students = $students->paginate(7)->withQueryString();

        return view('home', compact('students'));
    }

    public function create()
    {
        return view('add-student');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|unique:students,student_id',
            'name'       => 'required',
            'course'     => 'required',
            'faculty'    => 'required',
            'email'      => 'nullable|email',
            'phone'      => 'nullable',
            'address'    => 'nullable',
        ]);

        Student::create([
            'student_id' => $request->student_id,
            'name'       => $request->name,
            'course'     => $request->course,
            'faculty'    => $request->faculty,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'address'    => $request->address,
        ]);

        return redirect('/')->with('success', 'Student added successfully.');
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('view-student', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('edit-student', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $request->validate([
            'student_id' => 'required|unique:students,student_id,' . $student->id,
            'name'       => 'required',
            'course'     => 'required',
            'faculty'    => 'required',
            'email'      => 'nullable|email',
            'phone'      => 'nullable',
            'address'    => 'nullable',
        ]);

        $student->update([
            'student_id' => $request->student_id,
            'name'       => $request->name,
            'course'     => $request->course,
            'faculty'    => $request->faculty,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'address'    => $request->address,
        ]);

        return redirect('/')->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/')->with('success', 'Student deleted successfully.');
    }
}
