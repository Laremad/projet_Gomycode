<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Mon Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="projects.php">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="projects" class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-4">Mes Projets</h2>
            </div>
        </div>
        <div class="row">
        <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/project4.png" class="card-img-top" alt="Projet 2">
                    <div class="card-body">
                        <h5 class="card-title">Projet 1: Système d'Authentification Sécurisée</h5>
                        <h5 class="card-text">Description:</h5>
                        <p class="card-text">Développement d'un système d'authentification robuste en PHP, intégrant la gestion des erreurs et des messages d'erreur personnalisés pour améliorer l'expérience utilisateur. Le projet se concentre sur la sécurité et l'efficacité des processus de connexion utilisateur.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/project7.png" class="card-img-top" alt="Projet 2">
                    <div class="card-body">
                        <h5 class="card-title">Projet 2: Gestion de base de données pour une institution éducative CRUD</h5>
                        <h5 class="card-text">Description:</h5>
                        <p class="card-text">Ceci montre une interface de gestion des étudiants avec une table listant les étudiants, leurs prénoms, noms, classes, et des boutons d’action pour mettre à jour ou supprimer les enregistrements..</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/project0.png" class="card-img-top" alt="Projet 1">
                    <div class="card-body">
                        <h5 class="card-title">Projet 3: Visualisation de Figures Géométriques</h5>
                        <h5 class="card-text">Description:</h5>
                        <p class="card-text">Utilisation du module Python turtle pour créer des motifs géométriques complexes et dynamiques. Le projet explore comment la programmation peut générer des motifs artistiques en manipulant des formes et des couleurs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/project6.png" class="card-img-top" alt="Projet 2">
                    <div class="card-body">
                        <h5 class="card-title">Projet 4: Analyse de Corrélation avec une Carte Thermique</h5>
                        <h5 class="card-text">Description:</h5>
                        <p class="card-text">Ce projet consiste en l'analyse de la corrélation entre différentes variables d'un ensemble de données en utilisant une carte thermique. L'objectif est de visualiser les relations linéaires entre les variables telles que total_bill, tip, et size. Les couleurs représentent l'intensité de la corrélation, facilitant ainsi l'identification des relations positives ou négatives entre les variables. Ce type de visualisation est particulièrement utile pour l'analyse exploratoire de données (EDA) afin de découvrir des modèles et des insights significatifs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/project5.png" class="card-img-top" alt="Projet 2">
                    <div class="card-body">
                        <h5 class="card-title">Projet 5: Analyse de la Relation entre la Taille du Groupe et le Total des Factures</h5>
                        <h5 class="card-text">Description:</h5>
                        <p class="card-text">Ce projet explore la relation entre la taille d'un groupe et le total des factures dans un contexte donné. La visualisation utilise un graphique de tendance avec une zone ombrée représentant l'intervalle de confiance. Cela permet de comprendre comment les dépenses totales évoluent en fonction de la taille du groupe. Cette analyse est utile pour identifier des tendances et des comportements spécifiques qui peuvent influencer la prise de décision.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-white text-center py-3">
    <p>&2024 Copyright; Portfolio</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>