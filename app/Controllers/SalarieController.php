<?php
declare(strict_types=1);

require_once __DIR__ . '/../Models/Salarie.php';

class SalarieController
{
    public function index(): void
    {
        $salarie = new Salarie(Database::getInstance()->getConnection());
        $salaries = $salarie->getAll();
        $titre = 'Liste des salariés';
        $pageActive = 'salaries';

        require __DIR__ . '/../Views/salaries.php';
    }
}
