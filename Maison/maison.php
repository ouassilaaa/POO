<?php
class Maison{
    private $nom;
    private $largeur;
    private $longueur;
    private $nbrEtage;

    function __construct($nom,$largeur,$longueur,$nbrEtage){
        $this->nom = $nom;
        $this->largeur = $largeur;
        $this->longueur = $longueur;
        $this->nbrEtage = $nbrEtage;
    }

    function getNom(){
        return $this->nom;
    }

    function getLargeur(){
        return $this->largeur;
    }

    function getLongueur(){
        return $this->longueur;
    }

    function getNbrEtage(){
        return $this->nbrEtage;
    }

    function surface(){
        //return $this->largeur * $this->longueur;
        //autre méthode, plus proche des bonnes pratiques :
        return $this->getLargeur() * $this->getLongueur() * ($this->getNbrEtage() + 1);
    }

    function afficherSurface(){
        $surface = $this->surface();
        echo "<p>la surface de ".$this->getNom()." est égale à : $surface m2</p>";
    }
}

?>