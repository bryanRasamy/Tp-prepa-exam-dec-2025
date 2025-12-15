<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trajet le plus rentable par jour - cooperative</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <header class="bg-primary bg-gradient shadow-lg sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark py-3">
                <a href="/" class="navbar-brand fs-2 fw-bold">Cooperative</a>
            </nav>
        </div>
    </header>

    <main class="py-5">
        <section class="container">
            <h2 class="text-center fw-bold text-dark mb-5 display-4">Liste des trajets le plus rentable par jour</h2>
            
            <article class="row">
                <section class="col-12 col-md-12 col-lg-12">
                    <article class="card h-100 shadow-sm border-0 text-center">
                        <section class="card-body p-4">
                            <table class="table table-light table-striped text-center">
                                <tr>
                                    <th>Date</th>
                                    <th>Trajet</th>
                                    <th>Benefice obtenue</th>
                                </tr>
                                <?php 
                                    if(!empty($trajetrentable)){
                                        foreach($trajetrentable as $trajet){

                                ?>
                                    <tr>
                                        <td><?= $trajet['date_trajet_jr'] ?></td>
                                        <td><?= $trajet['nom_trajet'] ?></td>
                                        <td><?= $trajet['benefice'] ?> Ar</td>
                                    </tr>
                                <?php
                                        }
                                    }
                                ?>
                            </table>
                        </section>
                        <section class="row">
                            <article class="col-11 col-lg-11 col-mg-11">
                                <a href="/" class="btn btn-outline-danger mt-4 mb-4" type="button">Retour au menu principale</a>
                            </article>
                        </section>
                        
                    </article>
                </section>
            </article>
        </section>
    </main>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>