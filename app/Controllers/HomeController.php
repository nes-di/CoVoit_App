<?php
declare(strict_types=1);

class HomeController
{
    public function index(): void
    {
        $titre = 'Accueil - Covoiturage';
        $pageActive = 'home';
        require __DIR__ . '/../Views/home.php';
    }
}
