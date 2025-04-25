<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio - Présentation du projet</title>
  <meta content="Portfolio web professionnel pour BTS SIO" name="description">
  <meta content="portfolio, BTS SIO, développement web, PHP, HTML, CSS, Bootstrap" name="keywords">

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
            <h2 class="portfolio-title">Portfolio</h2>

            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="../assets/img/port/portfolio1.jpg" alt="Page d'accueil du portfolio" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="../assets/img/port/portfolio2.jpg" alt="Section tableau de synthese" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/portfolio-projets.jpg" alt="Section projets" class="img-fluid">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Informations du Projet</h3>
            <ul>
              <li><strong>Catégorie</strong>: Application Web</li>
              <li><strong>Contexte</strong>: BTS SIO 2025</li>
              <li><strong>Terminé le</strong>: Avril 2025</li>
              <li><strong>Technologies</strong>: HTML, CSS, JavaScript, PHP, Bootstrap</li>
              <li><strong>Dépôt</strong>: <a target="_blank" href="https://github.com/NathanChevrollier/NathanC_public">GitHub</a></li>
              <li><strong>Déploiement</strong>: CI/CD avec GitHub Actions</li>
            </ul>
            <p>
              Portfolio professionnel conçu pour présenter mon parcours, mes compétences et mes réalisations dans le cadre du BTS SIO. Ce site sert à la fois d'outil de présentation pour l'épreuve E5 et de vitrine professionnelle pour ma recherche d'emploi ou de poursuite d'études.
            </p>
          </div>

        </div>

        <!-- Harmonisation et structuration détaillée -->
        <div class="row mt-5">
          <div class="col-12">
            <h3 class="titre-section">Description succincte du projet</h3>
            <span class="titre-barre"></span>
            <ul class="list-unstyled">
              <li><strong>Date, lieu :</strong> Avril 2025, <span class="text-muted">CEFIM Tours (BTS SIO 2025)</span></li>
              <li><strong>Projet personnel</strong>, accompagné par l'équipe enseignante du CEFIM</li>
            </ul>
            <h4 class="titre-section">Contexte</h4>
            <span class="titre-barre"></span>
            <ul>
              <li>Outil de présentation pour l'épreuve E5 du BTS SIO</li>
              <li>Vitrine professionnelle pour la recherche d'emploi ou la poursuite d'études</li>
            </ul>
            <p>Valorisation de mon parcours et de mes compétences, en accord avec le référentiel BTS SIO.</p>

            <h4 class="titre-section">Environnement technique</h4>
            <span class="titre-barre"></span>
            <ul>
              <li><strong>Frontend</strong> : HTML5, CSS3, JavaScript, Bootstrap 5</li>
              <li><strong>Backend</strong> : PHP (structure modulaire, traitement du formulaire)</li>
              <li><strong>Librairies JS</strong> : Swiper (sliders), Isotope (filtrage projets)</li>
              <li><strong>Versioning</strong> : Git et GitHub</li>
              <li><strong>CI/CD</strong> : GitHub Actions (déploiement automatisé)</li>
              <li><strong>IDE</strong> : Visual Studio Code + extensions PHP/HTML/CSS</li>
              <li><strong>Sources</strong> : Docs Bootstrap, tutoriels PHP.net, cours CEFIM, Stack Overflow</li>
            </ul>

            <h4 class="titre-section">Fonctionnalités principales</h4>
            <span class="titre-barre"></span>
            <ul>
              <li>Présentation interactive de mon parcours et de mes compétences</li>
              <li>Affichage dynamique des projets réalisés</li>
              <li>Section tableau de synthèse des compétences</li>
              <li>Formulaire de contact sécurisé (PHP)</li>
              <li>Responsive design (Bootstrap)</li>
              <li>Déploiement automatisé via CI/CD</li>
            </ul>

            <h4 class="titre-section">Liste des tâches et planification</h4>
            <span class="titre-barre"></span>
            <div class="timeline-container mb-4">
              <div class="timeline">
                <div class="timeline-phase">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h5 class="timeline-title">Analyse & conception</h5>
                    <ul class="timeline-list">
                      <li>Définition des objectifs du portfolio</li>
                      <li>Identification des sections nécessaires</li>
                      <li>Sélection du template Bootstrap</li>
                    </ul>
                  </div>
                </div>
                <div class="timeline-phase">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h5 class="timeline-title">Développement</h5>
                    <ul class="timeline-list">
                      <li>Personnalisation du template "Personal"</li>
                      <li>Architecture modulaire en PHP</li>
                      <li>Création des pages de compétences</li>
                      <li>Développement des fiches projets</li>
                      <li>Implémentation du formulaire de contact</li>
                    </ul>
                  </div>
                </div>
                <div class="timeline-phase">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h5 class="timeline-title">Déploiement</h5>
                    <ul class="timeline-list">
                      <li>Configuration du dépôt GitHub</li>
                      <li>Mise en place du workflow CI/CD</li>
                      <li>Tests de compatibilité navigateurs</li>
                    </ul>
                  </div>
                </div>
                <div class="timeline-phase">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h5 class="timeline-title">Maintenance & évolution</h5>
                    <ul class="timeline-list">
                      <li>Ajout de nouveaux projets</li>
                      <li>Mise à jour de la veille technologique</li>
                      <li>Optimisation du référencement</li>
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
              <li><strong>Architecture modulaire PHP :</strong> Système d'inclusion de fichiers avec variables partagées et constantes pour les chemins.</li>
              <li><strong>Responsive design :</strong> Personnalisation des breakpoints Bootstrap et tests multi-écrans.</li>
              <li><strong>Sécurisation du formulaire :</strong> Validation côté serveur, filtrage des entrées, protection XSS/CSRF.</li>
              <li><strong>CI/CD :</strong> GitHub Actions avec script personnalisé et gestion des secrets.</li>
            </ul>

            <h4 class="titre-section">Bilan personnel</h4>
            <span class="titre-barre"></span>
            <div class="row">
              <div class="col-md-6">
                <h5 class="titre-section">Aptitudes renforcées</h5>
                <span class="titre-barre"></span>
                <ul>
                  <li>Maîtrise de Bootstrap pour des interfaces responsives</li>
                  <li>Intégration et personnalisation de templates</li>
                  <li>Structuration modulaire PHP</li>
                  <li>Utilisation de Git/GitHub</li>
                  <li>Configuration CI/CD</li>
                  <li>Organisation et présentation professionnelle</li>
                  <li>Documentation des compétences</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h5 class="titre-section">Axes d'amélioration</h5>
                <span class="titre-barre"></span>
                <ul>
                  <li>Optimisation des performances (chargement asynchrone)</li>
                  <li>Amélioration du SEO</li>
                  <li>Gestion de contenu dynamique (base de données)</li>
                  <li>Accessibilité (normes WCAG)</li>
                  <li>Internationalisation (multilingue)</li>
                </ul>
              </div>
            </div>

            <h4 class="titre-section">Annexes</h4>
            <span class="titre-barre"></span>
            <ul>
              <li>Code source sur <a target="_blank" href="https://github.com/NathanChevrollier/NathanC_public">github.com/NathanChevrollier/NathanC_public</a></li>
              <li>Documentation technique de l'architecture PHP modulaire</li>
              <li>Tableau de synthèse des compétences BTS SIO</li>
              <li>Schéma du workflow CI/CD</li>
              <li>Maquettes et wireframes</li>
            </ul>
          </div>
        </div>
      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

  <div class="credits">
    <a href="../mentions_legales.php">Mentions légales</a>
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