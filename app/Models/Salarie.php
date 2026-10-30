<?php
declare(strict_types=1);

class Salarie
{
    public function __construct(private PDO $connection)
    {
    }

    public function getAll(): array
    {
        return $this->connection
            ->query(
                'SELECT s.nom, s.prenom, s.email, s.telephone, serv.nom AS service
                 FROM salarie s
                 INNER JOIN service serv ON s.id_service = serv.id_service
                 ORDER BY s.nom ASC, s.prenom ASC'
            )
            ->fetchAll();
    }
}
