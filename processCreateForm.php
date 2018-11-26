<?php   
    //récupérer les données du formulaires qui sont dans $_POST
    //(bonus: et dans $_FILES si le formulaire soumettait aussi un fichier genre image)

    //filtrer ses données vérifier qu'il y'a pas de problème

    //appeler la fonction insert article en lui passant les paramètre filtrer depuis le formulaire.

    //affiché bravo à l'utilisateur/trice si tout c'est bien passé.
    print_r($_POST);
    die();
    if ($_POST['titre'] =="" ||!empty($_FILES['Images']['name'])  ||$_POST['categorie'] ==""  ||$_POST['commentaire'] =="" ){
        $titre = $_POST['titre'];
        $categorie = $_POST['categorie'];
        $commentaire = $_POST['commentaire'];    
    }

    if (isset($_FILES['Images']) && $_FILES['Images']['error'] == 0)
    {
       // Testons si le fichier n'est pas trop gros
       if ($_FILES['Images']['size'] <= 1000000)
       {
               // Testons si l'extension est autorisée
               $infosfichier = pathinfo($_FILES['Images']['name']);
               $extension_upload = $infosfichier['extension'];
               $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
               if (in_array($extension_upload, $extensions_autorisees))
               {
                       // On peut valider le fichier et le stocker définitivement
                       move_uploaded_file($_FILES['Images']['tmp_name'], 'images/' . basename($_FILES['images']['name']));

               }
       }
    };
?>