<?php

namespace App\Http\Controllers;

use App\Models\Present;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresteacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name = Auth::user()->name;
        $role = Auth::user()->role;
        $presentTeacher = Present::where('teacher_p', $name)->get();
        return view('presteacher.index', compact('presentTeacher', 'name', 'role'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $name = Auth::user()->name;
        $role = Auth::user()->role;
        $dataSubject = Subject::all();
        // dd($name);
        return view('presteacher.create', compact('name', 'role', 'dataSubject'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'teacher_p'=>'required',
            'attend_p'=>'required',
            'class_p'=>'required',
            'meet_p'=>'required',
            'date_p'=>'required',
            'subject_p'=>'required',
            'topic_p'=>'required',
            'student_p'=>'required',
        ]);

        $name = Auth::user()->name;

        $response = Present::create([
            'teacher_p' => $name,
            'attend_p' => $request->attend_p,
            'class_p' => $request->class_p,
            'meet_p' => $request->meet_p,
            'date_p' => $request->date_p,
            'subject_p' => $request->subject_p,
            'topic_p' => $request->topic_p,
            'student_p' => $request->student_p,
        ]);
        dd($response);

        return redirect()->route('presteacher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $name = Auth::user()->name;
        $role = Auth::user()->role;
        $detailPresent = Present::where('teacher_p', $name)->find($id);

        return view('presteacher.show', compact('detailPresent', 'name', 'role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $name = Auth::user()->name;
        $role = Auth::user()->role;
        $detailPresent = Present::where('teacher_p', $name)->find($id);

        return view('presteacher.edit', compact('detailPresent', 'name', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'teacher_p'=>'required',
            'attend_p'=>'required',
            'class_p'=>'required',
            'meet_p'=>'required',
            'date_p'=>'required',
            'subject_p'=>'required',
            'topic_p'=>'required',
            'student_p'=>'required',
        ]);

        $name = Auth::user()->name;

        $updatePresent = Present::find($id);

        $updatePresent->update([
            'teacher_p' => $name,
            'attend_p' => $request->attend_p,
            'class_p' => $request->class_p,
            'meet_p' => $request->meet_p,
            'date_p' => $request->date_p,
            'subject_p' => $request->subject_p,
            'topic_p' => $request->topic_p,
            'student_p' => $request->student_p,
        ]);

        return redirect()->route('presteacher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deletePresent = Present::find($id);
        $response = $deletePresent->delete();
        if ($response) {
            return redirect()->route('presteacher.index')->with('success', 'Present deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
