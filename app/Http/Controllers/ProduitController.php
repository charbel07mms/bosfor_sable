<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
    return view('produit.index', compact('produits'));
    }

    public function create()
    {
        return view('produit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'details' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,png|max:2048'
        ]);

        $imagePath = $request->file('image')->store('produits', 'public');

        Produit::create([
            'nom' => $request->nom,
            'prix' => $request->prix,
            'details' => $request->details,
            'image' => $imagePath
        ]);

        return redirect()->route('produit.index')->with('success', 'Produit ajouté avec succès.');
    }

    public function show($id)
    {
        $produit = Produit::findOrFail($id);
        return view('produit.show', compact('produit'));
    }

    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        return view('produit.edit', compact('produit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'details' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png|max:2048'
        ]);

        $produit = Produit::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($produit->image);
            $produit->image = $request->file('image')->store('produit', 'public');
        }

        $produit->nom = $request->nom;
        $produit->prix = $request->prix;
        $produit->details = $request->details;
        $produit->save();

        return redirect()->route('produit.index')->with('success', 'Produit mis à jour.');
    }

    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);

        Storage::disk('public')->delete($produit->image);

        $produit->delete();

        return redirect()->route('produit.index')->with('success', 'Produit supprimé.');
    }
}