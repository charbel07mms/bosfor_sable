@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="row g-0">
            <!-- Image du produit -->
            <div class="col-md-4">
                <img src="{{ asset('storage/'.$produit->image) }}" class="img-fluid rounded-start" alt="{{ $produit->nom }}">
            </div>

            <!-- Détails du produit -->
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title fw-bold">{{ $produit->nom }}</h2>
                    <h4 class="text-success fw-bold">{{ number_format($produit->prix, 0, ',', ' ') }} FCFA/m³</h4>
                    <p class="card-text">{{ $produit->details }}</p>

                    <a href="{{ route('produit.index') }}" class="btn btn-secondary mt-3">
                        Retour à la liste
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
