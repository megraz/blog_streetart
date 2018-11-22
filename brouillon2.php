<!--config.php-->
<?php
ini_set('display_errors', 1); // 0 .pr détecter les erreurs php
ini_set('log_errors', 1);
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

function connectToDB() { //1. fonction pr me connecter à ma bdd j'utilise PDO
    $user= '*****';//user = le mm pr les connexions aux bdd simplon...
    $pass= '*******';//pass = idem
    $databasehandler = new PDO('mysql:host=localhost;dbname=street_art',$user, $pass);
    return $databasehandler;
}

function closeDB(&$databasehandler) { //ac le & passage par référence qui peut modif la fonction
    $databasehandler = null; //pr tuer la connexion
}

function insertArticle() { //insertion d'un article
    $databasehandler = connectToDB();
    try { //INSERTION D'un article
        $stmt = $databasehandler->prepare("INSERT INTO post ('titre', 'date', 'nom', 'commentaire', 'categorie_idcategorie') VALUES (:titre, :date, :nom, :commentaire, :categorie_idcategorie)");
        $titre = "ememem lyon 5e";
        $date = "2018-09-23";
        $nom = "ememem";
        $commentaire = "Un nouveau flacking d''ememem quai fulchiron Lyon 5e";
        $categorie_idcategorie = 9 ;
        $stmt->bindParam(':titre', $titre);//statement = ma requpête
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':commentaire', $commentaire);
        $stmt->bindParam(':categorie_idcategorie', $categorie_idcategorie);
        $stmt->execute(); //4. EXECUTER LA REQUETE
    } catch (Exception $e) {
        die("Oh noes! There's an error in the query!");
    }
    closeDB($databasehandler);
}

function getAllArticles() {
    $databasehandler = connectToDB();
    $statement = $databasehandler->prepare("SELECT * FROM post"); //2.3. CONSTRUIRE LA REQUETE SQL AU FORMAT TEXTE et PREPARER LA REQUETE
    $statement->execute(); //EXECUTER LA REQUETE
    $results = $statement->fetchAll(PDO::FETCH_ASSOC); //5.ac fetchAll je récupère ts les résultats ds 1 [] les résultats st exploitables
    closeDB($databasehandler);
    return $results;
}

?>