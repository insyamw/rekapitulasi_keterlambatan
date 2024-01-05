<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    public function index()
    {
        $rombels = Rombel::all();
        return view('rombels.index', compact('rombels'));
    }

    public function create()
    {
        return view('rombels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rombel' => 'required',
        ]);

        Rombel::create($request->all());

        return redirect()->route('rombels.index')->with('success', 'Rombel created successfully.');
    }

    public function show(Rombel $rombel)
    {
        return view('rombels.show', compact('rombel'));
    }

    public function edit(Rombel $rombel)
    {
        return view('rombels.edit', compact('rombel'));
    }

    public function update(Request $request, Rombel $rombel)
    {
        $request->validate([
            'rombel' => 'required',
        ]);

        $rombel->update($request->all());

        return redirect()->route('rombels.index')->with('success', 'Rombel updated successfully');
    }

    public function destroy(Rombel $rombel)
    {
        $rombel->delete();

        return redirect()->route('rombels.index')->with('success', 'Rombel deleted successfully');
    }
}
