<?php

namespace App\Http\Controllers;

use App\Models\Late;
use Illuminate\Http\Request;

class LateController extends Controller
{
    public function index()
    {
        $lates = Late::all();
        return view('lates.index', compact('lates'));
    }

    public function create()
    {
        return view('lates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'date_time_late' => 'required',
            'information' => 'required',
        ]);

        $late = Late::create($request->except('file'));

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $late->addMediaFromRequest('file')->toMediaCollection('file');
        }

        return redirect()->route('lates.index')->with('success', 'Late created successfully.');
    }

    public function show(Late $late)
    {
        return view('lates.show', compact('late'));
    }

    public function edit(Late $late)
    {
        return view('lates.edit', compact('late'));
    }

    public function update(Request $request, Late $late)
    {
        $request->validate([
            'student_id' => 'required',
            'date_time_late' => 'required',
            'information' => 'required',
        ]);

        $late->update($request->except('file'));

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $late->addMediaFromRequest('file')->toMediaCollection('file');
        }

        return redirect()->route('lates.index')->with('success', 'Late updated successfully');
    }

    public function destroy(Late $late)
    {
        $late->delete();

        return redirect()->route('lates.index')->with('success', 'Late deleted successfully');
    }
}
