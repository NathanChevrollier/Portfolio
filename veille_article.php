<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veille Technologique</title>
    
    <link href="assets/css/style_cpt.css" rel="stylesheet">
    <link href="assets/css/style_veille.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<<<<<<< HEAD
=======
<header>
    <a class="retour" href="index.php#veille">Retour à la veille</a>
    <h1>Veille Technologique</h1>
</header>

>>>>>>> 9309fd8c46371a916c653494041980b24e619d55
<body>
    <header>
        <a class="retour" href="index.php#veille">Retour</a>
        <h1>Veille Technologique</h1>
    </header>

    <main>
        <section>
            <?php
            // Récupération de l'ID de l'article
            $article_id = isset($_GET['id']) ? intval($_GET['id']) : 1;
            
            // Simulation d'une base d'articles (à remplacer par votre système)
            $articles = [
                1 => [
                    'titre' => "L'impact de l'IA sur le développement",
                    'date' => "15 Mars 2025",
                    'auteur' => "Nathan Chevrollier",
                    'url' => "https://www.example.com/article1",
                    'resume' => "Les outils d'intelligence artificielle comme GitHub Copilot, Claude et ChatGPT ont considérablement transformé les pratiques de développement logiciel. Ces assistants basés sur l'IA sont capables de générer du code, d'expliquer des concepts complexes et de résoudre des problèmes techniques, ce qui permet aux développeurs de se concentrer davantage sur l'architecture et la logique métier plutôt que sur la syntaxe ou les tâches répétitives. Selon une étude récente, l'utilisation de ces outils peut augmenter la productivité des développeurs de 30 à 50%, tout en réduisant les erreurs courantes.",
                    'analyse' => "Cette évolution technologique est particulièrement pertinente pour mon projet professionnel car elle redéfinit les compétences attendues d'un développeur moderne. Plutôt que de mémoriser des syntaxes spécifiques, la valeur se déplace vers la capacité à formuler correctement des problèmes, à évaluer la qualité du code généré et à comprendre les concepts sous-jacents. Dans mes projets actuels, j'utilise déjà Copilot pour accélérer mon développement, ce qui me permet de consacrer plus de temps à l'architecture globale et à l'expérience utilisateur.",
                    'articles_connexes' => [
                        ['titre' => "Les meilleures pratiques pour travailler avec GitHub Copilot", 'url' => "veille_article.php?id=4"],
                        ['titre' => "Comment l'IA transforme les métiers du numérique", 'url' => "veille_article.php?id=5"]
                    ]
                ],
                2 => [
                    'titre' => "Tendances DevSecOps en 2025",
                    'date' => "2 Avril 2025",
                    'auteur' => "Nathan Chevrollier",
                    'url' => "https://www.example.com/article2",
                    'resume' => "L'année 2025 marque un tournant dans l'adoption des pratiques DevSecOps au sein des entreprises de toutes tailles. La sécurité n'est plus considérée comme une phase distincte du développement, mais comme un aspect intégré à chaque étape du cycle de vie des applications. Les outils d'analyse statique et dynamique du code source sont désormais intégrés directement dans les pipelines CI/CD, permettant une détection précoce des vulnérabilités. De plus, l'adoption de solutions 'Infrastructure as Code' sécurisées et l'automatisation des tests de pénétration deviennent des standards de l'industrie.",
                    'analyse' => "Ces pratiques DevSecOps sont essentielles dans mon parcours car la sécurité est devenue un aspect incontournable du développement moderne. Pour mes projets en BTS SIO, j'ai déjà commencé à intégrer des outils comme SonarQube et OWASP Dependency-Check dans mes processus de développement. Cette veille me permet de rester à jour sur les meilleures pratiques et d'anticiper les compétences qui seront recherchées par les employeurs dans les prochaines années.",
                    'articles_connexes' => [
                        ['titre' => "Automatiser les tests de sécurité dans un pipeline CI/CD", 'url' => "veille_article.php?id=6"],
                        ['titre' => "Les certifications sécurité incontournables en 2025", 'url' => "veille_article.php?id=7"]
                    ]
                ],
                3 => [
                    'titre' => "Les frameworks JavaScript à suivre",
                    'date' => "20 Mars 2025",
                    'auteur' => "Nathan Chevrollier",
                    'url' => "https://www.example.com/article3",
                    'resume' => "L'écosystème JavaScript continue d'évoluer à un rythme soutenu, avec des frameworks qui se distinguent en 2025 par leurs performances et leur adaptabilité. React maintient sa position dominante grâce à sa robustesse et sa vaste communauté, mais des alternatives comme Svelte et Solid gagnent rapidement en popularité grâce à leur approche de compilation qui élimine le besoin d'un DOM virtuel. Angular continue de séduire les entreprises avec son architecture complète, tandis que Vue.js reste apprécié pour sa courbe d'apprentissage douce et sa flexibilité.",
                    'analyse' => "Cette veille sur les frameworks JavaScript est directement liée à mon projet de portfolio et aux autres développements web que j'ai réalisés pendant ma formation. J'ai principalement utilisé React pour mes projets, mais cette analyse comparative me permet d'évaluer si d'autres frameworks pourraient être plus adaptés pour mes futures réalisations. La connaissance de ces technologies est également un atout majeur pour mon insertion professionnelle, car la maîtrise de plusieurs frameworks est souvent recherchée par les employeurs.",
                    'articles_connexes' => [
                        ['titre' => "Svelte vs React: une comparaison détaillée", 'url' => "veille_article.php?id=8"],
                        ['titre' => "Optimiser les performances des applications React", 'url' => "veille_article.php?id=9"]
                    ]
                ]
            ];
            
            // Vérifier si l'article existe
            if (!isset($articles[$article_id])) {
                $article_id = 1; // Article par défaut
            }
            
            $article = $articles[$article_id];
            ?>
            
            <!-- Titre de l'article -->
            <h2><?php echo $article['titre']; ?></h2>
            
            <!-- Informations sur l'article -->
            <ul class="sous-competences">
                <li><i class="bi bi-calendar3"></i> <strong>Date de publication :</strong> <?php echo $article['date']; ?></li>
                <li><i class="bi bi-person"></i> <strong>Auteur :</strong> <?php echo $article['auteur']; ?></li>
                <li><i class="bi bi-link-45deg"></i> <strong>Lien :</strong> <a href="<?php echo $article['url']; ?>" target="_blank" class="btn-outline-success">Accéder à l'article original</a></li>
            </ul>
            
            <!-- Résumé de l'article -->
            <h2>Résumé</h2>
            <div class="article-content">
                <p><?php echo $article['resume']; ?></p>
            </div>
            
            <!-- Analyse et lien avec le projet -->
            <h2>Analyse et pertinence</h2>
            <div class="article-content">
                <p><?php echo $article['analyse']; ?></p>
            </div>
            
            <!-- Articles similaires ou connexes -->
            <h2>Articles connexes</h2>
            <ul class="projets">
                <?php foreach ($article['articles_connexes'] as $connexe): ?>
                <li>
                    <h3><?php echo $connexe['titre']; ?></h3>
                    <p><a href="<?php echo $connexe['url']; ?>" class="btn-outline-success"><i class="bi bi-journal-text"></i> Lire l'article</a></p>
                </li>
                <?php endforeach; ?>
            </ul>
            
            <!-- Navigation entre les articles -->
            <div class="nav-competences">
                <a href="veille_article.php?id=1" <?php echo ($article_id == 1) ? 'class="active"' : ''; ?>>IA & Développement</a>
                <a href="veille_article.php?id=2" <?php echo ($article_id == 2) ? 'class="active"' : ''; ?>>DevSecOps</a>
                <a href="veille_article.php?id=3" <?php echo ($article_id == 3) ? 'class="active"' : ''; ?>>Frameworks JS</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Nathan Chevrollier. Tous droits réservés.</p>
    </footer>

    <style>
        .article-content {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .sous-competences li {
            margin-bottom: 10px;
        }
        
        .sous-competences i,
        .sous-competences-validees i {
            color: #18d26e;
            margin-right: 8px;
        }
    </style>
</body>
</html>