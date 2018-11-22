<?php include "header.php"; ?>

    <title>Création d'un post</title>
<body>
    <h1>Créer un article</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="process-post.php" method="POST">
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input id="title" class="form-control" name="title" type="text">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1"></label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <select class="form-control form-control-lg">
                            <option>Catégories</option>
                            <option>Sticker</option>
                            <option>Graffiti</option>
                            <option>Pochoir</option>
                            <option>Collage</option>
                            <option>Light painting</option>
                            <option>Installation</option>
                            <option>Affiche</option>
                            <option>Animation</option>
                            <option>Mosaique</option>
                            <option>Peinture</option>
                            <option>Tape Art</option>
                            <option>Yarn bombing</option>
                            <option>Anamorphose</option>
                            <option>Cellograff</option>
                            <option>Cle usb</option>
                            <option>Craie au sol</option>
                            <option>Graff vegetal</option>
                            <option>Lettrage</option>
                            <option>Clean tag</option>
                            <option>Autre</option>
                          </select>
                    <div class="form-group">
                        <label for="content">Message</label>
                        <textarea name="content" class="form-control" id="content" rows="10"></textarea>
                    </div>
                    <input type="submit" class="btn btn-warning" value="Submit">
                </form>
            </div>
        </div>
    </div>

<?php include("footer.php"); ?>