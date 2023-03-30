<?php
class Vehicule {
    //PROPRIETES
    private $nom;
    private $nbrRoue;
    private $vitesse;

    //CONSTRUCTEUR
    function __construct($nom, $nbrRoue, $vitesse){
        $this->nom = $nom;
        $this->nbrRoue = $nbrRoue;
        $this->vitesse = $vitesse;
    }

    //METHODES : GETTER ET SETTER
    public function getNom(){
        return $this->nom;
    }

    public function getNbrRoue(){
        return $this->nbrRoue;
    }

    public function getVitesse(){
        return $this->vitesse;
    }

    protected function setNom($nom){
        $this->nom = $nom;
    }

    protected function setNbrRoue($nbrRoue){
        $this->nbrRoue = $nbrRoue;
    }

    protected function setVitesse($vitesse){
        $this->vitesse = $vitesse;
    }

    //METHODES : LES AUTRES
    public function detect(){
        $nbrRoue = $this->getNbrRoue();

        switch($nbrRoue){
            case 2 :
                return "Ce Véhicule est une moto.";
                break;
            
            case 4 :
                return "Ce Véhicule est une voiture.";
                break;
            default :
                return "Ce véhicule n'est ni une moto, ni une voiture.";
        }
    }

    public function boost(){
        $this->setVitesse($this->getVitesse() + 50);
    }

    public function plusRapide($vehicule){
        if($this->getVitesse() < $vehicule->getVitesse()){
            return $vehicule->getNom();
        }else if ($this->getVitesse() > $vehicule->getVitesse()){
            return $this->getNom();
        } else {
            return $this->getNom()." et ".$vehicule->getNom()." sont aussi rapides l'un que l'autre.";
        }
    }

}

class Quad extends Vehicule {
    private $nbrRoue = 4;

    public function detect(){
        return "Ce Véhicule est un quad.";
    }

    public function boost(){
        $this->setVitesse($this->getVitesse() + 15);
    }
}

class Camion extends Vehicule {
    private $nbrRoue = 8;

    public function detect(){
        return "Ce Véhicule est un camion.";
    }

    public function boost(){
        echo "Je suis déjà au max !";
    }
}

class Calculatrice {
    static function addition($a,$b){
        return $a+$b;
    }
}


class Tank extends Vehicule {
    private $nbrRoue = 0;
    private $tailleCanon;
    private $nom; 
    private $vitesse; 

    //CONSTRUCTEUR
    function __construct($nom, $vitesse, $tailleCanon){
        $this->nom = $nom;
        $this->tailleCanon = $tailleCanon;
        $this->vitesse = $vitesse;
    }

    public function getTailleCanon(){
        return $this->tailleCanon;
    }

    public function detect(){
        return "Ce Véhicule est un tank. Il possède un canon de ".$this->getTailleCanon()."mm.";
    }

    public function boost(){
        echo "Je suis déjà au max !";
    }

    public function detectSuperType(){
        return parent::detect(); //j'utilise l'opéarateur de portée pour utiliser la méthode de la class parent (Vehicule) lui même, et non la méthode redéfinie
    }

    function addition($a,$b){
        return Calculatrice::addition($a,$b); //mon tank sait compter grâce à la calculatrice précédente
    }
}




?>