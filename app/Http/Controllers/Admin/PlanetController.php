<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanetStoreRequest;
use App\Http\Requests\PlanetUpdateRequest;
use App\Models\Planet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class PlanetController extends Controller
{
    /**
     * Affiche la liste paginée des planètes.
     * GET /admin/planets
     */
    public function index()
    {
        // Si tu utilises Spatie en middleware sur les routes, pas besoin d'appeler authorize ici.
        $planets = Planet::latest()->paginate(10);

        return view('admin/planets/index', compact('planets'));
    }

    /**
     * Affiche le formulaire de création.
     * GET /admin/planets/create
     */
    public function create()
    {
        return view('admin/planets/create');
    }

    /**
     * Enregistre une nouvelle planète.
     * POST /admin/planets
     */
    public function store(PlanetStoreRequest $request)
    {
        // 1) Données validées (voir PlanetStoreRequest)
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('planets', 'slug')],
            // …
        ]);

        $data['slug'] = $data['slug'] ?? Str::slug($data['name']);

        // 2) Upload d'image (optionnel)
        if ($request->hasFile('image')) {
            // Stocke dans storage/app/public/planets
            $data['image_path'] = $request->file('image')->store('planets', 'public');
        }

        // 3) Création
        Planet::create($data);

        // 4) Invalidation du cache public (liste utilisée côté front)
        Cache::forget('public.planets');

        // 5) Redirection avec message flash
        return redirect()->route('planets.index')->with('ok', 'Planète créée.');


    }

    /**
     * Affiche une planète.
     * GET /admin/planets/{planet}
     */
    public function show(Planet $planet)
    {
        return view('admin/planets/show', compact('planet'));
    }

    /**
     * Affiche le formulaire d’édition.
     * GET /admin/planets/{planet}/edit
     */
    public function edit(Planet $planet)
    {
        return view('admin/planets/edit', compact('planet'));
    }

    /**
     * Met à jour une planète existante.
     * PUT/PATCH /admin/planets/{planet}
     */
    public function update(PlanetUpdateRequest $request, Planet $planet)
    {
        // 1) Données validées (voir PlanetUpdateRequest)
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'slug' => ['nullable', 'string', 'max:255', Rule::unique('planets', 'slug')->ignore($planet->id)],
            // …
        ]);
        $data['slug'] = $data['slug'] ?? Str::slug($data['name']);

        // 2) Si une nouvelle image est fournie, on remplace l’ancienne proprement
        if ($request->hasFile('image')) {
            if ($planet->image_path) {
                Storage::disk('public')->delete($planet->image_path);
            }
            $data['image_path'] = $request->file('image')->store('planets', 'public');
        }

        // 3) Mise à jour
        $planet->update($data);

        // 4) Invalidation du cache public
        Cache::forget('public.planets');

        // 5) Redirection
        return redirect()->route('planets.index')->with('ok', 'Planète mise à jour.');
    }

    /**
     * Supprime une planète.
     * DELETE /admin/planets/{planet}
     */
    public function destroy(Planet $planet)
    {
        // Supprime l’image si elle existe
        if ($planet->image_path) {
            Storage::disk('public')->delete($planet->image_path);
        }

        $planet->delete();

        // Invalidation du cache public
        Cache::forget('public.planets');

        return redirect()->route('planets.index')->with('ok', 'Planète supprimée.');
    }
}
