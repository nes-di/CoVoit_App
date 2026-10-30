<?php require __DIR__ . '/header.php'; ?>

<section class="page-heading"> <!-- Section pour l'en-tête de la page avec le titre et l'énoncé -->
    <h1>Covoiturages à venir</h1>
    <p class="enonce">Les trajets dont le départ n'est pas encore passé.</p>
</section>

<div class="table-wrapper"> <!-- Conteneur pour le tableau des covoiturages à venir -->
    <table>
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Heure de départ</th>
                <th scope="col">Conducteur</th>
                <th scope="col">Places disponibles</th>
                <th scope="col">Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($covoiturages === []): ?> <!-- Vérifie s'il n'y a aucun covoiturage à venir -->
                <tr>
                    <td class="empty-result" colspan="5">
                        Aucun covoiturage à venir
                    </td>
                </tr>
            <?php else: ?> <!-- Sinon, affiche la liste des covoiturages à venir -->
                <?php foreach ($covoiturages as $trajet): ?>
                    <tr>
                        <td><?= htmlspecialchars((string) $trajet['date_trajet'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td> <!-- Affiche la date du trajet -->
                        <td><?= htmlspecialchars(substr((string) $trajet['heureDepart'], 0, 5), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td> <!-- Affiche l'heure de départ du trajet -->
                        <td>
                            <?= htmlspecialchars((string) $trajet['prenom'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?> <!-- Affiche le prénom du conducteur -->
                            <?= htmlspecialchars((string) $trajet['nom'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?> <!-- Affiche le nom du conducteur -->
                        </td>
                        <td><?= htmlspecialchars((string) $trajet['placeDispo'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td> <!-- Affiche le nombre de places disponibles -->
                        <td><?= htmlspecialchars((string) $trajet['statut'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td> <!-- Affiche le statut du trajet -->     
                    </tr>
                <?php endforeach; ?> <!-- Fin de la boucle foreach sur les covoiturages -->
            <?php endif; ?> <!-- Fin de la condition if sur les covoiturages -->
        </tbody>
    </table>
</div>

<?php require __DIR__ . '/footer.php'; ?>