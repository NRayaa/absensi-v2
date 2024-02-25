<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_subject'=>'required'
        ]);

        $response = Subject::create([
            'name_subject' => $request->name_subject,
        ]);
        if ($response) {
            return redirect()->route('subject.index')->with('success', 'Subject created successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subjectDetail = Subject::find($id);
        return view('subject.show', compact('subjectDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subjectDetail = Subject::find($id);
        return view('subject.edit', compact('subjectDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name_subject'=>'required'
        ]);

        $updateSubject = Subject::find($id);
        $response = $updateSubject->update([
            'name_subject' => $request->name_subject,
        ]);

        if ($response) {
            return redirect()->route('subject.index')->with('success', 'Subject updated successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteSubject = Subject::find($id);
        $response = $deleteSubject->delete();
        if ($response) {
            return redirect()->route('subject.index')->with('success', 'Subject deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
