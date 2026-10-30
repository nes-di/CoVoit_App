<?php require __DIR__ . '/header.php'; ?>

<section class="page-heading">
    <h1>Liste des salariés</h1>
    <p class="enonce">Les salariés inscrits sur la plateforme de covoiturage.</p>
</section>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">E-mail</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Service</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($salaries === []): ?>
                <tr>
                    <td class="empty-result" colspan="5">Aucun salarié trouvé</td>
                </tr>
            <?php else: ?>
                <?php foreach ($salaries as $salarie): ?>
                    <tr>
                        <td><?= htmlspecialchars((string) $salarie['nom'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars((string) $salarie['prenom'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars((string) $salarie['email'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars((string) $salarie['telephone'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars((string) $salarie['service'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php require __DIR__ . '/footer.php'; ?>
