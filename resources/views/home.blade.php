@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container mt-5">

    <!-- SECTION HEADER -->
    <div class="text-center mb-5">
        <h1 class="fw-bold mt-3">
            Bienvenue chez <span class="text-danger">BOSFOR</span> <span class="text-success">SARL</span>
        </h1>
        <p class="text-secondary">
            Votre fournisseur professionnel de sable pour constructions et travaux publics.
        </p>
    </div>

    <!-- SECTION BANNIERE -->
    <div class="position-relative rounded shadow-sm overflow-hidden mb-5" 
         style="background-image:url('/storage/app/public/images/bg.jpeg'); background-size:cover; background-position:center; height:350px;">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h2 class="fw-bold text-shadow">Des matériaux de qualité pour vos chantiers</h2>
            <p class="text-shadow">Sable lavé, sable de dune, sable latéritique, gravier, béton prêt...</p>
            <a href="/produits" class="btn btn-danger fw-bold mt-3">Voir nos produits</a>
        </div>
        <div class="overlay position-absolute w-100 h-100" style="background: rgba(0,0,0,0.4); top:0; left:0;"></div>
    </div>

</div>

<style>
.text-shadow { text-shadow: 1px 1px 4px rgba(0,0,0,0.5); }
</style>
@endsection
