@extends('layouts.app')

@section('content')

<style>
/* HERO - plein écran */
.hero {
    position: relative;
    height: 100vh;
    background: url('{{ asset('storage/images/bg.jpeg') }}') center/cover no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    overflow: hidden;
}

/* Voile sombre */
.hero::before {
    content: "";
    position: absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background-color: rgba(0,0,0,0.5);
    z-index:0;
}

/* Texte flottant et animé */
.hero-content {
    position: relative;
    z-index: 1;
    animation: floatText 2s ease-in-out infinite alternate;
}

.hero-content h1 {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 15px;
}

.hero-content h3 {
    font-size: 1.8rem;
    margin-bottom: 15px;
}

.hero-content p {
    font-size: 1.2rem;
    margin-bottom: 25px;
}

@keyframes floatText {
    0% { transform: translateY(0px); }
    100% { transform: translateY(-15px); }
}

/* Boutons */
.btn-senegal {
    background-color: #F2A900;
    color: #000;
    font-weight: bold;
    border: none;
    transition: 0.3s;
}
.btn-senegal:hover {
    background-color: #d18f00;
    color: white;
}

/* Section produits */
.section-title {
    border-left: 5px solid #F2A900;
    padding-left: 12px;
    font-weight: bold;
    margin-bottom: 20px;
    margin-top: 50px;
}

.card-img-top {
    height: 180px;
    object-fit: cover;
}
</style>

<!-- HERO -->
<div class="hero">
    <div class="hero-content">
        <h1>Bosfor SARL</h1>
        <h3>Vente de sable et matériaux de construction au Sénégal</h3>
        <p>Livraison rapide Dakar – Thiès – Mbour – Diamniadio</p>
        <div>
            <!-- Lien vers la section produits -->
            <a href="#produits" class="btn btn-senegal btn-lg">Produits disponibles</a>
        </div>
    </div>
</div>

<!-- SECTION PRODUITS -->
<div class="container" id="produits">
    <h2 class="section-title">Produits disponibles</h2>
    <div class="row g-4">
        @forelse($produits as $produit)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('storage/'.$produit->image) }}" class="card-img-top" alt="{{ $produit->nom }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $produit->nom }}</h5>
                        <p class="card-text">{{ $produit->details }}</p>
                        <p class="fw-bold">Prix: {{ number_format($produit->prix, 0, ',', ' ') }} FCFA/m³</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-muted mt-3">Aucun produit disponible pour le moment.</p>
        @endforelse
    </div>
</div>

@endsection
