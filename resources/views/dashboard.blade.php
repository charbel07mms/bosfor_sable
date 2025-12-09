<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: url('{{ asset('storage/images/bg.jpeg') }}') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }
        .card {
            opacity: 0.95; /* pour voir le fond derrière la carte */
        }
    </style>
</head>
<body>

<!-- Navbar -->
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
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-danger btn-sm ms-2" type="submit">Déconnexion</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenu -->
<div class="container mt-5">
    <h1 class="mb-4 text-white">Dashboard</h1>

    <div class="row">
        <!-- Carte Nombre de produits -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Nombre de produits ajoutés</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalProduits }}</h5>
                    <p class="card-text">Cliquez sur Produits pour voir la liste complète.</p>
                    <a href="{{ route('produit.index') }}" class="btn btn-light">Voir Produits</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
