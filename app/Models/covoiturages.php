<?php
declare(strict_types=1); // Activation du mode strict pour les types

class Covoiturage
{   
    public function __construct(private pdo $connection) // Constructeur de la classe Covoiturage avec la connexion à la base de données
    {
    }
    public function getUpcoming(): array // Récupère la liste des covoiturages à venir
    {
        return $this->connection // Exécute la requête pour récupérer les covoiturages à venir
            ->query(
                'SELECT
                    c.`date` AS date_trajet,
                    c.heureDepart,
                    c.placeDispo,
                    c.statut,
                    s.nom,
                    s.prenom
                 FROM covoiturage c
                 INNER JOIN salarie s ON s.id_salarie = c.id_salarie
                 WHERE TIMESTAMP(c.`date`, c.heureDepart) >= NOW()
                 ORDER BY c.`date` ASC, c.heureDepart ASC'
            )
            ->fetchAll();
    }
}