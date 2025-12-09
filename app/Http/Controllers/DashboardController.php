<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class DashboardController extends Controller
{
    public function index()
    {
        // Compte le nombre total de produits
        $totalProduits = Produit::count();

        // Passe la variable à la vue
        return view('dashboard', compact('totalProduits'));
    }
}
