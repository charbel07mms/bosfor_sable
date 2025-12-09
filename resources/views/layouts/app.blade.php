<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bosfor Sarl - Vente de sable</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Bande Sénégal dans le footer */
        .footer-band { width: 100%; height: 6px; display: flex; margin-top: 40px; }
        .footer-band div { flex: 1; }
        .sen-green { background: #006233; }
        .sen-yellow { background: #F2A900; }
        .sen-red { background: #CE1126; }

        /* Fond d'écran et voile sombre */
        body {
            background: url('{{ asset('storage/images/bg.jpeg') }}') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            min-height: 100vh;
        }
        /* Supprimer ces lignes de voile sombre global */
body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.25);
    z-index: -1;
}

/* Body simple */
body {
    background-color: #f8f9fa; /* Couleur claire par défaut pour les autres pages */
}


        /* Zone de contenu lisible */
        .content-overlay {
            background-color: rgba(255,255,255,0.9);
            color: #000;
            padding: 2rem;
            border-radius: 0.5rem;
        }

        /* Navbar custom */
        .navbar-custom {
            background-color: #F2A900;
            font-weight: bold;
        }
        .navbar-custom .nav-link {
            color: #000 !important;
        }
        .navbar-custom .nav-link:hover {
            text-decoration: underline;
        }

        /* Logo */
        .navbar-brand img {
            height: 50px;
        }

        /* Animation flottante pour les titres */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        .floating {
            animation: float 3s ease-in-out infinite;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('storage/logo.jpeg') }}" alt="Bosfor SARL Logo">
                <span class="ms-2 fw-bold" style="color: #CE1126;">BOSFOR <span style="color:#006233;">SARL</span></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bold {{ request()->routeIs('home') ? 'active' : '' }}" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold {{ request()->routeIs('produit.index') ? 'active' : '' }}" href="{{ route('produit.index') }}">Produits</a>
                    </li>

                    @guest
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ route('login') }}">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ route('register') }}">Inscription</a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link fw-bold text-danger">
                                    Déconnexion
                                </button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="py-4">
        <div class="container content-overlay">
            @yield('content')
        </div>
    </main>

    <!-- FOOTER -->
    <div class="footer-band">
        <div class="sen-green"></div>
        <div class="sen-yellow"></div>
        <div class="sen-red"></div>
    </div>

    <footer class="text-center py-3 bg-white shadow-sm">
        © Bosfor Sarl – Vente de sable au Sénégal
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
