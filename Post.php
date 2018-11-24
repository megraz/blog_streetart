<?php
    class Post {
        private $id;
        private $titre;
        private $date;
        private $nom;
        private $commentaire;
        private $categorie_idcategorie;	

        public function __construct($id,$titre,$date,$nom, $commentaire, $categorie_idcategorie){
            $this->id = $id;
            $this->titre = $titre;
            $this->titre = $date;
            $this->titre = $nom;
            $this->titre = $commentaire;
            $this->titre = $categorie_idcategorie;
        }
    }
//mettre getter et setter

   

?>