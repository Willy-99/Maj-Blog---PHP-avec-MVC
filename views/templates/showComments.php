<?php 
    /** 
     * Affichage de la partie commentaires : liste des commentaires pour chaque article avec un bouton "supprimer" pour chacun.      
     */
?>

<div class="adminArticle">

    <h2>Gestion des commentaires</h2>

    <?php if (empty($comments)) { ?>

        <p>Aucun commentaire pour cet article.</p>

    <?php } else { ?>

        <?php foreach ($comments as $comment) { ?>

            <div class="articleLine">

                <div class="title">
                    <?= htmlspecialchars($comment->getPseudo()) ?>
                </div>

                <div class="content">
                    <?= nl2br(htmlspecialchars($comment->getContent())) ?>
                </div>

                <div>
                    <?= htmlspecialchars($comment->getDateCreation()->format('d/m/Y H:i')) ?>
                </div>

                <div>
                    <form method="POST" action="index.php?action=deleteComment">
                        <input
                            type="hidden"
                            name="idComment"
                            value="<?= $comment->getId() ?>"
                        >

                        <input
                            type="hidden"
                            name="idArticle"
                            value="<?= $idArticle ?>"
                        >

                        <button
                            type="submit"
                            class="submit"
                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');"
                        >
                            Supprimer
                        </button>
                    </form>
                </div>

            </div>

        <?php } ?>

    <?php } ?>

</div>

<p>
    <a class="submit" href="index.php?action=admin">
        Retour à l'administration
    </a>
</p>

