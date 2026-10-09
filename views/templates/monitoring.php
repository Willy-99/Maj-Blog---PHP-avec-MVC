<h2>Monitoring</h2>
<table class="monitoringTable">
    <thead>
        <tr>
            <th>
                <a href="index.php?action=monitoring&sort=title&order=<?= $sort === 'title' && $order === 'asc' ? 'desc' : 'asc' ?>">
                    Article
                    <?= $sort === 'title' ? ($order === 'asc' ? '↑' : '↓') : '' ?>
                </a>
            </th>
            <th>
                <a href="index.php?action=monitoring&sort=date&order=<?= $sort === 'date' && $order === 'asc' ? 'desc' : 'asc' ?>">
                    Date
                    <?= $sort === 'date' ? ($order === 'asc' ? '↑' : '↓') : '' ?>
                </a>
            </th>
            <th>
                <a href="index.php?action=monitoring&sort=views&order=<?= $sort === 'views' && $order === 'asc' ? 'desc' : 'asc' ?>">
                    Vues
                    <?= $sort === 'views' ? ($order === 'asc' ? '↑' : '↓') : '' ?>
                </a>
            </th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($articles as $article) { ?>
            <tr>
                <td><?= $article->getTitle() ?></td>
                <td><?= Utils::convertDateToFrenchFormat($article->getDateCreation()) ?></td>
                <td><?= $article->getNombreVues() ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<p>
    <a class="submit" href="index.php?action=admin">
         Retour à l'administration
    </a>
</p>