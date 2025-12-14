<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Coopérative</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <header class="bg-primary bg-gradient shadow-lg sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark py-3">
                <a href="/" class="navbar-brand fs-2 fw-bold">Cooperative</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav gap-3">
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="/ajout">Test</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main class="py-5">
        <div class="container">
            <h1 class="text-center fw-bold text-dark mb-5 display-4">Bienvenue sur l'appli de gestion de coopérative</h1>
            
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <a href="" class="text-decoration-none text-dark">
                            <div class="card-body p-4">
                                <i class="bi bi-clipboard2 text-primary display-1 mb-3"></i>
                                <h2 class="card-title h4 fw-bold mb-3">Liste de véhicules</h2>
                                <p class="card-text text-muted">Par jour avec son chauffeur correspondant</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <a href="" class="text-decoration-none text-dark">
                            <div class="card-body p-4">
                                <i class="bi bi-clipboard2-data-fill text-success display-1 mb-3"></i>
                                <h2 class="card-title h4 fw-bold mb-3">Total montant bénéfice</h2>
                                <p class="card-text text-muted">Par véhicule</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <a href="" class="text-decoration-none text-dark">
                            <div class="card-body p-4">
                                <i class="bi bi-clipboard2-data-fill text-info display-1 mb-3"></i>
                                <h2 class="card-title h4 fw-bold mb-3">Total montant bénéfice</h2>
                                <p class="card-text text-muted">Par jour</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <a href="" class="text-decoration-none text-dark">
                            <div class="card-body p-4">
                                <i class="bi bi-clipboard2-check-fill text-warning display-1 mb-3"></i>
                                <h2 class="card-title h4 fw-bold mb-3">Trajets les plus rentables</h2>
                                <p class="card-text text-muted">Par jour</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>