<?php
declare(strict_types=1); // Activation du mode strict pour les types

require_once __DIR__ . '/config/config.php'; // Inclusion du fichier de configuration de l'application
require_once __DIR__ . '/app/Core/Database.php'; // Inclusion de la classe Database pour la gestion de la base de données
require_once __DIR__ . '/app/Controllers/HomeController.php'; // Inclusion du contrôleur HomeController
require_once __DIR__ . '/app/Controllers/SalarieController.php';
require_once __DIR__ . '/app/Controllers/CovoiturageController.php'; // Inclusion du contrôleur CovoiturageController²

// Routes autorisées : page => [contrôleur, méthode]
$routes = [ // Définition des routes autorisées : page => [contrôleur, méthode] 
    'home' => [HomeController::class, 'index'], // Ajout de la route pour la page d'accueil
    'salaries' => [SalarieController::class, 'index'], // Ajout de la route pour la page des salariés
    'covoiturages' => [CovoiturageController::class, 'index'], // Ajout de la route pour les covoiturages à venir
];

$page = $_GET['page'] ?? 'home'; // Page demandée, par défaut 'home'

if (!is_string($page) || !isset($routes[$page])) { // Vérifie si la page demandée est valide
    http_response_code(404);
    echo 'Page introuvable';
    exit;
}

[$controleur, $methode] = $routes[$page]; // Récupère le contrôleur et la méthode associés à la page demandée
(new $controleur())->$methode(); // Instancie le contrôleur et appelle la méthode correspondante
