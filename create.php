<?php
    include("functions.php");
    $categories = getAllCategories();
?>

<?php include "header.php"; ?>

<?php 
// isset = test le formulaire ; is_dir= verifie si la variable correspond à isset
if (isset($_POST['filename'])){ //on utilise isset pr vérifier que le fichier existe//
    //on récupère les données titre du fichier et on rajoute basename([], ".txt") pr supp le txt qui s'ecrit en plus//
    $titre = htmlspecialchars(basename($_POST['filename'], ".txt")); 
    $Images = htmlspecialchars(file_get_contents('post/'.$_POST['Images']));
    $categorie = htmlspecialchars(file_get_contents('post/'.$_POST['categorie']));
    $commentaire = htmlspecialchars(file_get_contents('post/'.$_POST['filename'])); // on recup le contenu et on y accède//
    }
?>
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
                        <select name="categorie" class="form-control form-control-lg">
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