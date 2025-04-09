<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>B-Formation</title>
  <meta content="Système de gestion administratif pour les établissements de formation" name="description">
  <meta content="formation, gestion, présence, signature, emploi du temps" name="keywords">

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
                <h2 class="portfolio-title">B-Formation</h2>

                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                    <div class="swiper-slide">
                        <img src="../assets/img/bform/bformation-admin.jpg" alt="Interface administrateur de B-Formation" 
                            style="max-width: 100%; height: auto; max-height: 500px; object-fit: contain;">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/bform/bformation-student.jpg" alt="Interface étudiant de B-Formation" 
                            style="max-width: 100%; height: auto; max-height: 500px; object-fit: contain;">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/bform/bformation-teacher.jpg" alt="Interface professeur de B-Formation" 
                            style="max-width: 100%; height: auto; max-height: 500px; object-fit: contain;">
                    </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4 portfolio-info">
                <h3>Description du Projet</h3>
                <p>
                B-Formation est une application web de gestion administrative développée pour les établissements d'enseignement. Elle propose une solution complète pour la gestion des cours, des présences et des emplois du temps.
                </p>
                <ul>
                    <li><strong>Catégorie</strong>: Web </li>
                    <li><strong>Client</strong>: Centres de formation et établissements d'enseignement</li>
                    <li><strong>Terminée le</strong>: 01 Mars, 2024</li>
                    <li><strong>Page du projet</strong>: <a target="_blank" href="https://github.com/NathanChevrollier/NathanC_public">Github</a></li>
                </ul>

                <p>
                B-Formation répond aux besoins administratifs des établissements d'enseignement en offrant une plateforme centralisée pour gérer les aspects essentiels de l'organisation pédagogique. L'application permet de suivre la présence des étudiants grâce à un système de signature numérique, d'organiser les emplois du temps et de gérer efficacement les ressources humaines et matérielles.
                </p>
                
                <h4>Principales fonctionnalités</h4>
                <ul>
                    <li>Gestion des utilisateurs (administrateurs, enseignants, élèves)</li>
                    <li>Gestion des classes et des matières</li>
                    <li>Planification des emplois du temps</li>
                    <li>Système de signature numérique pour le suivi des présences</li>
                    <li>Interfaces dédiées pour chaque type d'utilisateur</li>
                    <li>Système d'authentification sécurisé</li>
                </ul>
                
                <h4>Technologies utilisées</h4>
                <ul>
                    <li>PHP (Architecture MVC personnalisée)</li>
                    <li>MySQL (Base de données relationnelle)</li>
                    <li>Bootstrap 5 (Interface responsive)</li>
                    <li>JavaScript (Interactions utilisateur)</li>
                    <li>Git (Versioning et déploiement)</li>
                </ul>
            </div>

        </div>
        
        <!-- Section détaillée -->
        <div class="row mt-5">
          <div class="col-12">
            <h3>Architecture du projet</h3>
            <p>
              B-Formation est construit selon une architecture MVC (Modèle-Vue-Contrôleur) personnalisée qui garantit une séparation claire des préoccupations et facilite la maintenance du code. Le projet s'articule autour de cinq entités principales, comme détaillé dans nos diagrammes ci-dessous.
            </p>
            <p>
              <strong>Documentation complète disponible:</strong>
              <a href="../assets/img/bform/1-Dictionnaire de données.pdf" target="_blank">Dictionnaire de données</a> |
              <a href="../assets/img/bform/2-MCD.pdf" target="_blank">Modèle Conceptuel de Données</a> |
              <a href="../assets/img/bform/3-Modèle Logique de Données (MLD).pdf" target="_blank">Modèle Logique de Données</a>
              <a href="../assets/img/bform/9-bform_cartography.drawio.png" target="_blank">Cartographie</a>
            </p>
            
            <div class="row mt-4">
              <div class="col-md-6">
                <h4>Modèle de données (MPD)</h4>
                <p>La base de données du projet est organisée autour de 5 tables principales :</p>
                <img src="../assets/img/bform/4-MPD.png" alt="Modèle Physique de Données" class="img-fluid mb-3">
                <p class="text-muted">Modèle physique de données montrant les relations entre les entités du système</p>
              </div>
              
              <div class="col-md-6">
                <h4>Acteurs du système</h4>
                <img src="../assets/img/bform/6-Diagramme de contexte.drawio.png" alt="Diagramme des acteurs" class="img-fluid mb-3">
                <p>Le système propose trois niveaux d'accès avec des fonctionnalités spécifiques :</p>
                <ul>
                  <li><strong>Administrateur</strong> : Gestion complète du système, création des utilisateurs, des classes et des cours</li>
                  <li><strong>Enseignant</strong> : Consultation de l'emploi du temps, gestion des signatures de présence, vue d'ensemble des classes</li>
                  <li><strong>Étudiant</strong> : Consultation de l'emploi du temps, signature de présence aux cours</li>
                </ul>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-md-6">
                <h4>Architecture technique</h4>
                <img src="../assets/img/bform/7-Diagramme de package.drawio.png" alt="Diagramme d'architecture" class="img-fluid mb-3">
                <p>
                  Cette architecture illustre les relations entre les contrôleurs et la façon dont l'application gère l'authentification, les utilisateurs, les classes, les matières, les emplois du temps et les signatures.
                </p>
              </div>
              
              <div class="col-md-6">
                <h4>Cas d'utilisation</h4>
                <img src="../assets/img/bform/8-diagramme de classes simplifié.png" alt="Diagramme de cas d'utilisation" class="img-fluid mb-3">
                <p>
                  Ce diagramme montre les différentes interactions entre les entités du système et comment les utilisateurs accèdent aux différentes fonctionnalités.
                </p>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-12">
                <h4>Planification du projet</h4>
                <img src="../assets/img/bform/5-gantt.png" alt="Diagramme de planification" class="img-fluid mb-3">
                <p>
                  La planification du projet a été organisée en plusieurs phases, de l'analyse des besoins au déploiement final, en passant par le développement des différents modules du système.
                </p>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-12">
                <h4>Fonctionnement du système de signature</h4>
                <p>
                  Le système de signature des présences fonctionne selon un processus simple et efficace :
                </p>
                <ol>
                  <li>L'enseignant ouvre les signatures pour un cours spécifique</li>
                  <li>Les étudiants se connectent à leur interface et peuvent valider leur présence</li>
                  <li>L'enseignant peut suivre en temps réel les signatures et fermer la session</li>
                  <li>À la fermeture, les étudiants n'ayant pas signé sont automatiquement marqués comme absents</li>
                </ol>
                <p>
                  Ce système garantit un suivi précis et fiable des présences, tout en simplifiant considérablement le processus administratif traditionnellement chronophage.
                </p>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-12">
                <h4>Défis techniques et solutions</h4>
                <p>
                  Le développement de B-Formation a nécessité de relever plusieurs défis techniques :
                </p>
                <ul>
                  <li><strong>Architecture modulaire</strong> : Implémentation d'un framework MVC personnalisé pour garantir l'évolutivité</li>
                  <li><strong>Sécurité</strong> : Mise en place d'un système d'authentification avec gestion des rôles</li>
                  <li><strong>Expérience utilisateur</strong> : Interfaces adaptées à chaque type d'utilisateur pour une utilisation intuitive</li>
                  <li><strong>Déploiement automatisé</strong> : Configuration GitHub Actions pour faciliter le déploiement continu</li>
                </ul>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-12">
                <h4>Perspectives d'évolution</h4>
                <p>
                  B-Formation est conçu pour évoluer et s'enrichir de nouvelles fonctionnalités :
                </p>
                <ul>
                  <li>Intégration d'un système de messagerie interne</li>
                  <li>Application mobile pour faciliter les signatures</li>
                  <li>Système de notifications pour informer les étudiants des changements d'emploi du temps</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="row mt-5">
      <div class="col-12">
        <h3>Compétences du BTS SIO mises en œuvre</h3>
        <p>
          Ce projet a permis de développer et démontrer plusieurs compétences du référentiel du BTS SIO option SLAM, 
          comme illustré dans le tableau de synthèse ci-dessous:
        </p>
        
        <div class="table-responsive mt-4">
          <table class="table table-bordered">
            <thead class="table-dark">
              <tr>
                <th>Compétence</th>
                <th>Comment elle est mise en œuvre dans B-Formation</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Gérer le patrimoine informatique</strong></td>
                <td>
                  <ul>
                    <li>Conception et implémentation d'une base de données relationnelle MySQL pour stocker les informations des utilisateurs, classes, matières, et signatures</li>
                    <li>Mise en place d'une architecture MVC personnalisée garantissant la maintenabilité du code</li>
                    <li>Gestion des utilisateurs avec différents niveaux d'accès et de droits (administrateur, enseignant, étudiant)</li>
                    <li>Configuration d'un pipeline CI/CD avec GitHub Actions pour automatiser le déploiement</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td><strong>Travailler en mode projet</strong></td>
                <td>
                  <ul>
                    <li>Planification rigoureuse du développement comme illustré dans le diagramme de Gantt</li>
                    <li>Division du projet en phases distinctes: analyse, conception, développement, tests et déploiement</li>
                    <li>Utilisation de Git pour le versioning du code et le suivi des modifications</li>
                    <li>Documentation technique complète du projet (dictionnaire de données, MCD, MLD, MPD)</li>
                    <li>Conception de diagrammes UML pour modéliser l'architecture et les cas d'utilisation</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td><strong>Mettre à disposition des utilisateurs un service informatique</strong></td>
                <td>
                  <ul>
                    <li>Développement d'interfaces adaptées à chaque type d'utilisateur pour une expérience intuitive</li>
                    <li>Mise en place d'un système de signature numérique pour le suivi des présences</li>
                    <li>Création d'un tableau de bord pour que les enseignants puissent suivre en temps réel les signatures</li>
                    <li>Conception d'une interface responsive avec Bootstrap 5 pour garantir l'accessibilité sur différents appareils</li>
                    <li>Sécurisation de l'accès aux fonctionnalités grâce à une gestion des rôles</li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
    

  </main><!-- End #main -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    <a href="https://bootstrapmade.com/">Mentions légales
      
    </a>
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