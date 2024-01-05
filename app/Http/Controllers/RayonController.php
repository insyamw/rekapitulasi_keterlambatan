<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use App\Models\Rombel;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    public function index()
    {
        $rayons = Rayon::all();
        return view('rayons.index', compact('rayons'));
    }

    public function create()
    {
        return view('rayons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rayon' => 'required',
            'user_id' => 'required',
            // 'nama_rombel' => 'required',
        ]);
        Rayon::create([
            'rayon' => $request->rayon,
            'user_id' => $request->user_id,
        ]);
        // Rombel::create([
        //     'rombel' => $request->nama_rombel,

        // ]);
        return redirect()->route('rayons.index')->with('success', 'Rayon updated successfully');

    }

    public function show(Rayon $rayon)
    {
        return view('rayons.show', compact('rayon'));
    }

    public function edit(Rayon $rayon)
    {
        return view('rayons.edit', compact('rayon'));
    }

    public function update(Request $request, Rayon $rayon)
    {
        $request->validate([
            'rayon' => 'required',
            'user_id' => 'required',

        ]);

        $rayon->update($request->all());

        return redirect()->route('rayons.index')->with('success', 'Rayon updated successfully');
    }

    public function destroy(Rayon $rayon)
    {
        $rayon->delete();

        return redirect()->route('rayons.index')->with('success', 'Rayon deleted successfully');
    }
}
