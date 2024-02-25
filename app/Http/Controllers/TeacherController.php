<?php

namespace App\Http\Controllers;

use App\Models\Present;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
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
        $this->validate($request, [
            'name_teacher'=>'required'
        ]);

        $response = Teacher::create([
            'name_teacher' => $request->name_teacher,
        ]);

        if ($response) {
            return redirect()->route('teacher.index')->with('success', 'Teacher created successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


        $teacherDetail = Teacher::find($id);
        $teacherName = Teacher::find($id)->name_teacher;
        $teacherPresent = Present::where('teacher_p', $teacherName)->get();
        // dd($teacherName);
        return view('teacher.show', compact('teacherDetail', 'teacherName', 'teacherPresent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacherDetail = Teacher::find($id);
        return view('teacher.edit', compact('teacherDetail'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name_teacher'=>'required'
        ]);

        $updateTeacher = Teacher::find($id);
        $response = $updateTeacher->update([
            'name_teacher' => $request->name_teacher,
        ]);

        if ($response) {
            return redirect()->route('teacher.index')->with('success', 'Teacher updated successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteTeacher = Teacher::find($id);
        $response = $deleteTeacher->delete();

        if ($response) {
            return redirect()->route('teacher.index')->with('success', 'Teacher deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
