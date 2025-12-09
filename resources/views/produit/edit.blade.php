@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark fw-bold">
            Modifier le Produit
        </div>
        <div class="card-body">
            <form action="{{ route('produit.update', $produit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nom" class="form-label fw-bold">Nom du produit</label>
                    <input type="text" id="nom" name="nom" class="form-control" value="{{ $produit->nom }}" required>
                </div>

                <div class="mb-3">
                    <label for="prix" class="form-label fw-bold">Prix (FCFA/m³)</label>
                    <input type="number" id="prix" step="0.01" name="prix" class="form-control" value="{{ $produit->prix }}" required>
                </div>

                <div class="mb-3">
                    <label for="details" class="form-label fw-bold">Détails</label>
                    <textarea id="details" name="details" class="form-control" rows="4">{{ $produit->details }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Changer l'image</label>
                    <input type="file" id="image" name="image" class="form-control">
                    <p class="mt-2 fw-bold">Image actuelle :</p>
                    <img src="{{ asset('storage/'.$produit->image) }}" width="150" class="img-thumbnail">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary fw-bold">Mettre à jour</button>
                    <a href="{{ route('produit.index') }}" class="btn btn-secondary fw-bold">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
