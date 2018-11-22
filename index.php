<?php
    include("include/config.php");
    //rappatriement de tous les articles
    $articles = getAllArticles();
    //affichage
?>
<!-- DRAW HTML PAGE -->
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 border">
        <!--afficher ici ts les articles-->
        <?php foreach($articles as $article) { ?>
            <article class="col-sm-6">
                <h2><?php echo $article['titre']; ?></h2>
                <p><?php echo $article['commentaire']; ?></p>
                <form action="delete-post.php" method="POST">
                    <input type="hidden" name="filename" value="">
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>
                <?php echo '<a href="change-file.php?fichier="><input type="submit" value="modifier" class="btn btn-outline-warning"></a>';?>
            </article>
        <?php } ?>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>

