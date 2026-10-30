<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titre, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></title>
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>
    <?php $pageActive = $pageActive ?? ''; $numero = $numero ?? null; ?>
    <nav class="navigation" aria-label="Navigation principale">
        <div class="navigation-inner">
            <a class="brand" href="index.php?page=home">Covoiturage</a>
            <div class="navigation-links">
                <a href="index.php?page=home"<?= $pageActive === 'home' ? ' class="active" aria-current="page"' : '' ?>>Accueil</a>
                <a href="index.php?page=salaries"<?= $pageActive === 'salaries' ? ' class="active" aria-current="page"' : '' ?>>Salariés</a>
                <a href="index.php?page=covoiturages"<?= $pageActive === 'covoiturages' ? ' class="active" aria-current="page"' : '' ?>>Covoiturages</a>
                <a href="requete1.php"<?= $numero !== null ? ' class="active" aria-current="page"' : '' ?>>Requêtes</a>
            </div>
        </div>
    </nav>
    <?php if ($numero !== null): ?>
    <nav class="navigation sub-navigation" aria-label="Navigation des requêtes">
        <div class="navigation-inner">
            <div class="navigation-links">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <a href="requete<?= $i ?>.php"<?= $numero === $i ? ' class="active" aria-current="page"' : '' ?>>
                        Requête <?= $i ?>
                    </a>
                <?php endfor; ?>
            </div>
        </div>
    </nav>
    <?php endif; ?>
    <main class="container">
