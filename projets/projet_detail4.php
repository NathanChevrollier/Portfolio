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
            <h3 class="titre-section">Informations du Projet</h3>
            <div class="titre-barre"></div>
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

        <div class="row mt-5">
            <div class="col-12">
                <h3 class="titre-section">Description détaillée</h3>
                <div class="titre-barre"></div>
                <p>
                  Ce portfolio a été développé comme un projet complet de présentation professionnelle, intégrant l'ensemble des compétences et une partie des projets réalisés durant mon parcours en BTS SIO option SLAM. Il s'agit d'une application web responsive basée sur un template Bootstrap personnalisé, avec une architecture PHP modulaire.
                </p>

                <h4 class="titre-section">Objectifs du projet</h4>
                <div class="titre-barre"></div>
                <ul>
                  <li><strong>Présenter mon profil</strong> : Mettre en avant mon parcours, mes compétences techniques et mon expérience professionnelle</li>
                  <li><strong>Valoriser mes réalisations</strong> : Exposer les projets significatifs réalisés pendant ma formation</li>
                  <li><strong>Documenter mes compétences</strong> : Faire le lien entre mes réalisations et les compétences du référentiel BTS SIO</li>
                  <li><strong>Établir ma présence en ligne</strong> : Créer une vitrine professionnelle accessible aux recruteurs et aux entreprises</li>
                </ul>

                <h4 class="titre-section">Fonctionnalités principales</h4>
                <div class="titre-barre"></div>
                <ul>
                  <li><strong>Page d'accueil personnalisée</strong> avec présentation synthétique de mon profil</li>
                  <li><strong>Section présentation</strong> incluant le tableau de synthèse BTS SIO</li>
                  <li><strong>Section entreprise</strong> présentant mes expériences professionnelles (alternance et stage)</li>
                  <li><strong>Section veille technologique</strong> pour présenter mes différentes méthodes de veilles</li>
                  <li><strong>Section projets</strong> avec galerie et liens vers les descriptions détaillées</li>
                  <li><strong>Section compétences</strong> détaillant les six compétences du référentiel BTS SIO</li>
                  <li><strong>Fiches détaillées</strong> pour chaque compétence avec les sous-compétences associées</li>
                  <li><strong>Formulaire de contact</strong></li>
                </ul>

                <h4 class="titre-section">Aspects techniques</h4>
                <div class="titre-barre"></div>
                <p>
                  Le développement de ce portfolio s'appuie sur plusieurs techniques et technologies :
                </p>
                <ul>
                  <li><strong>Architecture modulaire</strong> : Structure PHP avec inclusion de fichiers (header.php, presentation.php, etc.) permettant une maintenance facilitée</li>
                  <li><strong>Framework Bootstrap</strong> : Utilisation de Bootstrap 5 pour un design responsive et moderne</li>
                  <li><strong>Intégration CI/CD</strong> : Configuration GitHub Actions pour le déploiement automatisé lors des pushs sur la branche main</li>
                  <li><strong>Javascript</strong> : Utilisation de librairies comme Swiper pour les sliders et Isotope pour le filtrage des projets</li>
                  <li><strong>PHP</strong> : Gestion du formulaire de contact avec validation et protection contre les injections</li>
                </ul>

                <h4 class="titre-section">Liens avec les compétences du référentiel BTS SIO</h4>
                <div class="titre-barre"></div>
                <p>
                  Ce projet de portfolio met en œuvre deux compétences principales du référentiel BTS SIO option SLAM :
                </p>

                <div class="mt-4">
                  <h5 class="titre-section">Compétence 3 : Développer la présence en ligne de l'organisation</h5>
                  <div class="titre-barre"></div>
                  <ul>
                    <li>
                      <strong>Participer à la valorisation de l'image de l'organisation sur les médias numériques</strong>
                      <p>J'ai adapté un template Bootstrap professionnel pour créer une identité visuelle cohérente qui valorise mon image. L'utilisation de styles personnalisés (style.css) et d'icônes modern (Bootstrap Icons, Boxicons) contribue à une présentation soignée.</p>
                    </li>
                    <li>
                      <strong>Participer à l'évolution d'un site Web exploitant les données de l'organisation</strong>
                      <p>J'ai structuré le site avec une architecture modulaire en PHP qui permet d'ajouter facilement de nouveaux contenus. Les données sont organisées de façon cohérente entre les différentes sections (projets, compétences, etc.).</p>
                    </li>
                  </ul>
                </div>

                <div class="mt-4">
                  <h5 class="titre-section">Compétence 6 : Organiser son développement professionnel</h5>
                  <div class="titre-barre"></div>
                  <ul>
                    <li>
                      <strong>Gérer son identité professionnelle</strong>
                      <p>Le portfolio constitue le cœur de mon identité numérique professionnelle, présentant mon profil, mes compétences et mes réalisations. J'ai intégré des liens vers mes réseaux professionnels (LinkedIn, GitHub) et proposé mon CV en téléchargement.</p>
                    </li>
                    <li>
                      <strong>Mettre en œuvre des outils et stratégies de veille informationnelle</strong>
                      <p>La section veille technologique du portfolio présente ma méthode de veille et les résultats de cette démarche à travers des articles structurés.</p>
                    </li>
                    <li>
                      <strong>Développer son projet professionnel</strong>
                      <p>Le travail réalisé sur ce portfolio m'a permis de structurer et présenter mon parcours de formation et mes compétences de manière cohérente, soutenant ainsi mon projet professionnel.</p>
                    </li>
                  </ul>
                </div>

                <h4 class="titre-section">Processus de développement</h4>
                <div class="titre-barre"></div>
                <p>
                  Le développement de ce portfolio a suivi une approche méthodique en plusieurs phases :
                </p>
                <ol>
                  <li><strong>Sélection et adaptation du template</strong> : Choix du template Bootstrap "Personal" comme base et personnalisation</li>
                  <li><strong>Structure de l'architecture</strong> : Mise en place de l'inclusion modulaire des différentes sections en PHP</li>
                  <li><strong>Création des pages de compétences</strong> : Développement des 6 pages détaillées pour chaque compétence du référentiel</li>
                  <li><strong>Intégration des projets</strong> : Création des fiches détaillées pour chaque projet significatif</li>
                  <li><strong>Développement du formulaire de contact</strong> : Mise en place et sécurisation du formulaire PHP</li>
                  <li><strong>Configuration du déploiement</strong> : Mise en place du système GitHub Actions pour le déploiement automatisé</li>
                </ol>

                <h4 class="titre-section">Défis techniques relevés</h4>
                <div class="titre-barre"></div>
                <p>
                  La réalisation de ce portfolio a nécessité de surmonter plusieurs défis techniques :
                </p>
                <ul>
                  <li>
                    <strong>Architecture modulaire</strong> : Structuration du code PHP pour permettre une maintenance facile et l'ajout de nouveaux contenus sans modifier la structure principale
                  </li>
                  <li>
                    <strong>Adaptation responsive</strong> : Personnalisation du template Bootstrap pour garantir une expérience utilisateur optimale sur tous les appareils
                  </li>
                  <li>
                    <strong>Sécurisation du formulaire</strong> : Mise en place de validations côté serveur pour le formulaire de contact
                  </li>
                  <li>
                    <strong>Configuration CI/CD</strong> : Mise en place du workflow GitHub Actions pour automatiser le déploiement sur le serveur
                  </li>
                </ul>

                <h4 class="titre-section">Perspectives d'évolution</h4>
                <div class="titre-barre"></div>
                <p>
                  Ce portfolio est conçu comme un projet évolutif qui s'enrichira au fil de mon parcours professionnel :
                </p>
                <ul>
                  <li>Enrichissement de la section veille technologique avec de nouveaux articles</li>
                  <li>Ajout de nouveaux projets réalisés pendant la formation et en entreprise</li>
                  <li>Amélioration du référencement avec des meta tags plus spécifiques</li>
                  <li>Intégration d'analyses d'audience pour mesurer l'impact du portfolio</li>
                </ul>

                <h4 class="titre-section">Conclusion</h4>
                <div class="titre-barre"></div>
                <p>
                  Ce portfolio représente un élément essentiel de mon parcours en BTS SIO, démontrant ma capacité à concevoir et développer un site web professionnel. Il met en valeur mes compétences techniques tout en servant de vitrine pour mes réalisations et mon expérience professionnelle. En tant qu'outil évolutif, il m'accompagnera tout au long de ma carrière professionnelle, s'enrichissant de nouvelles réalisations et compétences.
                </p>
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