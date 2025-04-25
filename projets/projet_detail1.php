<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Click'n Eat</title>
  <meta content="Système de gestion pour les restaurants et les commandes en ligne" name="description">
  <meta content="restaurant, commande, réservation, Laravel, PHP" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

            <div class="col-lg-8">
                <h2 class="portfolio-title">Click'n Eat</h2>

                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                    <div class="swiper-slide">
                        <img src="../assets/img/clickneat/clickneat-admin.jpg" alt="Interface administrateur de Click'n Eat" 
                            style="max-width: 100%; height: auto; max-height: 500px; object-fit: contain;">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/clickneat/clickneat-client.jpg" alt="Interface client de Click'n Eat" 
                            style="max-width: 100%; height: auto; max-height: 500px; object-fit: contain;">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/clickneat/clickneat-restaurateur.jpg" alt="Interface restaurateur de Click'n Eat" 
                            style="max-width: 100%; height: auto; max-height: 500px; object-fit: contain;">
                    </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4 portfolio-info">
                <h3>Description du Projet</h3>
                <p>
                Click'n Eat est une application web permettant la gestion des restaurants, des commandes en ligne et des réservations. Elle propose une interface adaptée pour les clients, les restaurateurs et les administrateurs.
                </p>
                <ul>
                    <li><strong>Date</strong>: Janvier 2025 - Avril 2025</li>
                    <li><strong>Lieu</strong>: BTS SIO SLAM, My Digital School</li>
                    <li><strong>Projet</strong>: <a target="_blank" href="https://github.com/NathanChevrollier/clickneat">Github</a></li>
                </ul>
            </div>

        </div>
        
        <!-- Section détaillée -->
        <div class="row mt-5">
          <div class="col-12">
            <h3>Contexte du projet</h3>
            <p>
              Dans le cadre de mon BTS SIO option SLAM, j'ai développé une application web de gestion pour les restaurants.
              Ce projet répond aux besoins croissants des établissements de restauration souhaitant numériser leur offre 
              et proposer des services de commande et réservation en ligne.
            </p>
            <p>
              Ce projet a été réalisé à la demande de mon professeur d'informatique qui souhaitait un système complet 
              répondant aux exigences actuelles du marché de la restauration, avec une architecture moderne et évolutive.
            </p>
            
            <div class="row mt-4">
              <div class="col-md-6">
                <h4>Équipe de travail</h4>
                <p>J'ai réalisé ce projet individuellement</p>
              </div>
              
              <div class="col-md-6">
                <h4>Environnement technique</h4>
                <p>Technologies utilisées dans ce projet :</p>
                <ul>
                  <li><strong>Framework</strong>: Laravel 10 (PHP)</li>
                  <li><strong>Base de données</strong>: MySQL</li>
                  <li><strong>Front-end</strong>: Bootstrap 5, JavaScript, Tailwind CSS</li>
                  <li><strong>Outils</strong>: Git, GitHub, VS Code, PHPUnit</li>
                  <li><strong>Déploiement</strong>: GitHub Actions, serveur Linux</li>
                  <li><strong>Sources d'apprentissage</strong>: Documentation officielle Laravel, Laracasts, Stack Overflow</li>
                </ul>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-12">
                <h4>Liste des tâches réalisées</h4>
                <ol>
                  <li><strong>Analyse des besoins</strong> - Étude des exigences fonctionnelles et techniques en collaboration avec les utilisateurs finaux</li>
                  <li><strong>Conception de la base de données</strong> - Modélisation des entités principales (restaurants, catégories, plats, utilisateurs, commandes, réservations)</li>
                  <li><strong>Développement du back-office</strong> - Création des interfaces administrateur et restaurateur avec toutes les fonctionnalités CRUD</li>
                  <li><strong>Développement de l'interface client</strong> - Conception d'une expérience utilisateur intuitive pour la commande et la réservation</li>
                  <li><strong>Mise en place de l'authentification</strong> - Système de gestion des rôles (client, restaurateur, administrateur) avec des droits spécifiques</li>
                  <li><strong>Développement du système de commande</strong> - Gestion complète du processus de commande (panier, validation, suivi)</li>
                  <li><strong>Implémentation du système de réservation</strong> - Gestion des tables, disponibilités et créneaux horaires</li>
                  <li><strong>Tests unitaires et fonctionnels</strong> - Vérification de la robustesse des fonctionnalités</li>
                </ol>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-12">
                <h4>Difficultés rencontrées et solutions apportées</h4>
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead class="table-dark">
                      <tr>
                        <th>Difficulté</th>
                        <th>Solution</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Gestion des réservations avec chevauchement d'horaires</td>
                        <td>Implémentation d'un algorithme de vérification des disponibilités des tables avec une logique de créneaux horaires (2h avant/après)</td>
                      </tr>
                      <tr>
                        <td>Système de rôles et permissions complexe</td>
                        <td>Utilisation des middlewares Laravel pour contrôler l'accès aux différentes parties de l'application selon le rôle de l'utilisateur</td>
                      </tr>
                      <tr>
                        <td>Gestion des relations many-to-many (menus et plats)</td>
                        <td>Utilisation efficace des relations Eloquent de Laravel avec des tables pivots pour gérer les associations complexes</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-12">
                <h4>Bilan personnel</h4>
                <div class="row">
                  <div class="col-md-6">
                    <h5>Aptitudes renforcées</h5>
                    <ul>
                      <li><strong>Maîtrise de Laravel</strong> - J'ai approfondi ma connaissance du framework Laravel et de son écosystème</li>
                      <li><strong>Automatisation des tests</strong> - J'ai appris à implémenter des tests automatisés efficaces pour garantir la qualité du code</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h5>Axes d'amélioration</h5>
                    <ul>
                      <li><strong>Optimisation des performances</strong> - Le chargement de certaines pages avec de nombreuses relations est parfois lent</li>
                      <li><strong>Interface mobile</strong> - L'application est responsive mais pourrait être améliorée pour les appareils mobiles</li>
                      <li><strong>Documentation technique</strong> - La documentation du code pourrait être plus détaillée pour faciliter la maintenance</li>
                      <li><strong>Sécurité avancée</strong> - Des tests de sécurité plus poussés seraient nécessaires avant une mise en production réelle</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-12">
                <h4>Annexes</h4>
                <p>
                  Retrouvez ci-dessous les liens vers les différentes annexes du projet :
                </p>
                <ul>
                  <li><a href="../assets/docs/clickneat/modele-conceptuel.pdf" target="_blank">Modèle Conceptuel de Données</a></li>
                  <li><a href="../assets/docs/clickneat/diagramme-cas-utilisation.pdf" target="_blank">Diagramme de Cas d'Utilisation</a></li>
                  <li><a href="../assets/docs/clickneat/cahier-des-charges.pdf" target="_blank">Cahier des Charges</a></li>
                  <li><a href="../assets/docs/clickneat/rapport-technique.pdf" target="_blank">Rapport Technique</a></li>
                  <li><a href="../assets/docs/clickneat/guide-utilisation.pdf" target="_blank">Guide d'Utilisation</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

  <div class="credits">
    <a href="#">Mentions légales</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>