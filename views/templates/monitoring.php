<h2>Monitoring</h2>
<table>
    <thead>
        <tr>
            <th>Article</th>
            <th>Date</th>
            <th>Vues</th>
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