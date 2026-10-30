<?php
declare(strict_types=1); // Activation du mode strict pour les types

require_once __DIR__ . '/../Models/covoiturage.php'; // Inclusion du modèle Covoiturage

class CovoiturageController // Contrôleur pour gérer les actions liées aux covoiturages
{
    public function index(): void // Affiche la liste des covoiturages à venir
    {
        $modele = new Covoiturage(Database::getInstance()->getConnection()); // Instancie le modèle Covoiturage avec la connexion à la base de données
        $covoiturages = $modele->getUpcoming(); // Récupère la liste des covoiturages à venir
        $titre = 'Covoiturages à venir'; // Titre de la page
        $pageActive = 'covoiturages'; // Indique la page active pour le menu de navigation

        require __DIR__ . '/../Views/covoiturages.php'; // Inclut la vue pour afficher la liste des covoiturages à venir
    }
}