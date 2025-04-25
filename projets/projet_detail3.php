<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Calculette immobilière - Présentation du projet</title>
  <meta content="Application de simulation de prêt immobilier" name="description">
  <meta content="calculette, prêt, immobilier, simulation, BTS SIO" name="keywords">

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

  <!-- Barre esthétique CSS -->
  <style>
    .titre-barre {
      width: 60px;
      height: 4px;
      background: linear-gradient(90deg, #18d26e 60%, #35e888 100%);
      border-radius: 2px;
      margin: 0 0 24px 0;
      display: block;
    }
    .titre-section {
      color: #18d26e;
      font-weight: 700;
      letter-spacing: 1px;
      margin-bottom: 0.5rem;
    }
    .competences-bts {
      background: rgba(24,210,110,0.08);
      border-radius: 10px;
      padding: 16px 24px;
      margin-bottom: 32px;
    }
  </style>
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title">Calculette de prêt immobilier</h2>

            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="../assets/img/calcu/calculette1.jpg" alt="Interface de la calculette" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="../assets/img/calcu/calculette2.jpg" alt="Tableau d'amortissement" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="../assets/img/calcu/calculette3.jpg" alt="Exemple d'utilisation" class="img-fluid">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Informations du Projet</h3>
            <ul>
              <li><strong>Catégorie</strong>: Application Web/Desktop</li>
              <li><strong>Client</strong>: Microlead</li>
              <li><strong>Terminé le</strong>: 12 juin 2024</li>
              <li><strong>Page du projet</strong>: <a target="_blank" href="https://github.com/NathanChevrollier/NathanC_public">Github</a></li>
              <li><strong>Technologies</strong>: HTML, CSS, JavaScript, Electron</li>
            </ul>
            <p>
              Application destinée à simuler des prêts immobiliers en calculant automatiquement les mensualités et l'évolution du capital restant dû. Une solution pratique pour les professionnels de l'immobilier et les particuliers souhaitant planifier leurs investissements.
            </p>
          </div>

        </div>

        <div class="row mt-5">
          <div class="col-12">
            <h3 class="titre-section">Description succincte du projet</h3>
            <span class="titre-barre"></span>
            <ul class="list-unstyled">
              <li><strong>Date, lieu :</strong> 12 juin 2024, <span class="text-muted">My Digital School Angers (BTS SIO 2025)</span></li>
              <li><strong>Projet individuel</strong>, supervisé par l'équipe enseignante du CEFIM et Microlead (commanditaire)</li>
            </ul>
            <h4 class="titre-section">Contexte</h4>
            <span class="titre-barre"></span>
            <p>
              Application développée dans le cadre du BTS SIO 2025 pour permettre la simulation rapide des conditions d'un prêt immobilier, avec visualisation claire de l'évolution du remboursement mois par mois.
            </p>
            <h4 class="titre-section">Environnement technique</h4>
            <span class="titre-barre"></span>
            <ul>
              <li>HTML5 pour la structure de l'interface</li>
              <li>CSS3 pour la mise en forme et les animations</li>
              <li>JavaScript (ES6) pour la logique de calcul et les validations</li>
              <li>Electron pour la conversion en application desktop (packaging avec Electron Forge)</li>
            </ul>
            <p>Distribution multiplateforme (Windows, MacOS, Linux) grâce à Electron.</p>

            <h4 class="titre-section">Fonctionnalités principales</h4>
            <span class="titre-barre"></span>
            <ul>
              <li><strong>Calcul de mensualités</strong> à partir du montant, taux d'intérêt et durée</li>
              <li><strong>Tableau d'amortissement complet</strong> affichant chaque échéance</li>
              <li><strong>Validation des données saisies</strong> pour garantir la fiabilité des calculs</li>
              <li><strong>Export PDF</strong> des résultats</li>
              <li><strong>Application multiplateforme</strong> (web & desktop)</li>
            </ul>

            <h4 class="titre-section">Liste des tâches et planification</h4>
            <span class="titre-barre"></span>
            <div class="timeline-container mb-4">
              <div class="timeline">
                <div class="timeline-phase">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h5 class="timeline-title">Analyse & définition des besoins</h5>
                    <ul class="timeline-list">
                      <li>Analyse des besoins et définition des fonctionnalités essentielles</li>
                    </ul>
                  </div>
                </div>
                <div class="timeline-phase">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h5 class="timeline-title">Conception de l'interface utilisateur</h5>
                    <ul class="timeline-list">
                      <li>Design centré sur l'expérience utilisateur</li>
                    </ul>
                  </div>
                </div>
                <div class="timeline-phase">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h5 class="timeline-title">Développement de la logique métier</h5>
                    <ul class="timeline-list">
                      <li>Implémentation de la logique de calcul financier</li>
                      <li>Développement du système de validation des entrées</li>
                    </ul>
                  </div>
                </div>
                <div class="timeline-phase">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h5 class="timeline-title">Ajout de fonctionnalités avancées</h5>
                    <ul class="timeline-list">
                      <li>Intégration de l'export PDF</li>
                      <li>Packaging avec Electron pour distribution multiplateforme</li>
                    </ul>
                  </div>
                </div>
                <div class="timeline-phase">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h5 class="timeline-title">Tests & corrections</h5>
                    <ul class="timeline-list">
                      <li>Tests et corrections de bugs</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <style>
              .timeline-container { position: relative; }
              .timeline {
                position: relative;
                margin-left: 20px;
                padding-left: 20px;
                border-left: 4px solid #198754;
              }
              .timeline-phase {
                position: relative;
                margin-bottom: 30px;
              }
              .timeline-dot {
                position: absolute;
                left: -32px;
                top: 6px;
                width: 20px;
                height: 20px;
                background: #198754;
                border-radius: 50%;
                border: 3px solid #fff;
                box-shadow: 0 0 0 2px #198754;
              }
              .timeline-title {
                font-size: 1.15rem;
                font-weight: 600;
                margin-bottom: 8px;
              }
              .timeline-list {
                margin-bottom: 0;
              }
              @media (max-width: 575px) {
                .timeline { margin-left: 10px; padding-left: 10px; }
                .timeline-dot { left: -22px; width: 14px; height: 14px; }
              }
            </style>

            <h4 class="titre-section">Difficultés rencontrées & solutions</h4>
            <span class="titre-barre"></span>
            <ul>
              <li><strong>Validation robuste des entrées utilisateur :</strong> Fonctions de validation avancées avec feedback visuel et messages d'erreur personnalisés.</li>
              <li><strong>Implémentation des formules financières complexes :</strong> Utilisation de la formule d'annuité constante, gestion des arrondis à deux décimales.</li>
              <li><strong>Configuration d'Electron et packaging :</strong> Utilisation d'Electron Forge, configuration multi-plateforme.</li>
              <li><strong>Création dynamique du tableau d'amortissement :</strong> Génération DOM optimisée via createElement/appendChild.</li>
            </ul>

            <h4 class="titre-section">Bilan personnel</h4>
            <span class="titre-barre"></span>
            <div class="row">
              <div class="col-md-6">
                <h5 class="titre-section">Aptitudes renforcées</h5>
                <span class="titre-barre"></span>
                <ul>
                  <li>Conception et réalisation d'interfaces utilisateur responsive et ergonomiques</li>
                  <li>Développement de logiques de calcul complexes avec JavaScript</li>
                  <li>Gestion de projet en autonomie</li>
                  <li>Gestion des erreurs et validation des données utilisateur</li>
                  <li>Maîtrise de Git et du packaging d'applications</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h5 class="titre-section">Axes d'amélioration</h5>
                <span class="titre-barre"></span>
                <ul>
                  <li>Intégration de tests unitaires automatisés</li>
                  <li>Fonctionnalités avancées (comparaison de scénarios, sauvegarde des simulations)</li>
                  <li>Modernisation du design (framework CSS)</li>
                  <li>Approfondissement des formules financières</li>
                </ul>
              </div>
            </div>

            <h4 class="titre-section">Annexes</h4>
            <span class="titre-barre"></span>
            <ul>
              <li>Code source sur <a target="_blank" href="https://github.com/NathanChevrollier/NathanC_public">github.com/NathanChevrollier/NathanC_public</a></li>
              <!-- Ajouter ici d'autres liens annexes si disponibles -->
            </ul>

            <h4 class="titre-section">Applications et bénéfices</h4>
            <span class="titre-barre"></span>
            <ul>
              <li>Agents immobiliers : simulations rapides pour les clients</li>
              <li>Particuliers : évaluation de scénarios d'emprunt</li>
              <li>Conseillers financiers : outil d'aide à la décision</li>
              <li>Banques : service complémentaire pour les clients</li>
            </ul>
          </div>
        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    <a href="https://bootstrapmade.com/">Mentions légales</a>
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