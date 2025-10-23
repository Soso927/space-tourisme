<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planets = Planet::latest()->paginate(10);
        return view('admin.planets.index', compact('planets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.planets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $validated = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        'distance' => 'required',
        'travel_time' => 'required',
        'image' => 'nullable|image|max:2048',
        'is_published' => 'boolean',
    ]);
    
    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('planets', 'public');
    }
    
    Planet::create($validated);
    
    return redirect()->route('planets.index')
        ->with('success', 'Planète créée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Planet $planet)
    {
        return view('admin.planets.edit', compact('planet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planet $planet)
    {
         return view('admin.planets.edit', compact('planet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planet $planet)
    {
            $validated = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        'distance' => 'required',
        'travel_time' => 'required',
        'image' => 'nullable|image|max:2048',
        'is_published' => 'boolean',
    ]);
    
    if ($request->hasFile('image')) {
        // Supprimer l'ancienne image
        if ($planet->image) {
            Storage::disk('public')->delete($planet->image);
        }
        $validated['image'] = $request->file('image')->store('planets', 'public');
    }
    
    $planet->update($validated);
    
    return redirect()->route('planets.index')
        ->with('success', 'Planète mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planet $planet)
    {
            if ($planet->image) {
        Storage::disk('public')->delete($planet->image);
    }
    
    $planet->delete();
    
    return redirect()->route('planets.index')
        ->with('success', 'Planète supprimée');
    }
}
