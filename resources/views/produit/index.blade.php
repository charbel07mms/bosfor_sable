<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nos Produits</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: url('{{ asset('storage/images/bg.jpeg') }}') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }
        .card {
            opacity: 0.95; /* permet de voir le fond derrière la carte */
        }
    </style>
</head>
<body>

<!-- Navbar identique à l'accueil -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('produit.index') }}">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-danger btn-sm ms-2" type="submit">Déconnexion</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenu des produits -->
<div class="container mt-5">
    <h1 class="mb-4 text-white">Nos Produits</h1>
    <div class="row">
        @foreach($produits as $produit)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    @if($produit->image)
                        <img src="{{ asset('storage/' . $produit->image) }}" class="card-img-top" alt="{{ $produit->nom }}">
                    @else
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Pas d'image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $produit->nom }}</h5>
                        <p class="card-text">{{ Str::limit($produit->details, 50) }}</p>
                        <p class="card-text"><strong>{{ $produit->prix }} FCFA/m3</strong></p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('produit.show', $produit->id) }}" class="btn btn-primary btn-sm mb-1">Voir</a>
                        <a href="{{ route('produit.edit', $produit->id) }}" class="btn btn-warning btn-sm mb-1">Modifier</a>
                        <form action="{{ route('produit.destroy', $produit->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
