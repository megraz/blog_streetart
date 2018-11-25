<?php
    include("functions.php");
    $categories = getAllCategories();
?>


<?php include "header.php"; ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Créer un article</h1>
                    <form action="processCreateForm.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input id="titre" class="form-control" name="titre" type="text">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1"></label>
                            <input type="file" name="Images" class="form-control-file" id="fileupload" value="fileupload">
                        </div>
                        <select class="form-control form-control-lg">
                            <?php 
                                foreach($categories as $categorie) { ?>
                                    ?><option value="<?=$categorie['idcategorie']?>"><?=$categorie['nom']?></option><?php
                                }
                            ?>
                        </select>
                        <div class="form-group">
                            <label for="content">Message</label>
                            <textarea name="commentaire" class="form-control" id="commentaire" rows="10"></textarea>
                        </div>
                        <input type="submit" class="btn btn-warning" value="Envoyer" style="margin-bottom: 10px;">
                    </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

<?php include("footer.php"); ?>