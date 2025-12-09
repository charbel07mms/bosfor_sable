@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark fw-bold">
            Ajouter un Produit
        </div>
        <div class="card-body">
            <form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nom" class="form-label fw-bold">Nom du produit</label>
                    <input type="text" id="nom" name="nom" class="form-control" placeholder="Ex: Sable lavé" required>
                </div>

                <div class="mb-3">
                    <label for="prix" class="form-label fw-bold">Prix (FCFA/m³)</label>
                    <input type="number" id="prix" step="0.01" name="prix" class="form-control" placeholder="Ex: 1500" required>
                </div>

                <div class="mb-3">
                    <label for="details" class="form-label fw-bold">Détails</label>
                    <textarea id="details" name="details" class="form-control" rows="4" placeholder="Description du produit"></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Image du produit</label>
                    <input type="file" id="image" name="image" class="form-control" required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success fw-bold">Enregistrer</button>
                    <a href="{{ route('produit.index') }}" class="btn btn-secondary fw-bold">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
