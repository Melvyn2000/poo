<?php

class Vehicule
{
    public $marque;
    public $puissance;
    public $kilometrage;

    /**
     * @param $marque
     * @param $puissance
     * @param $kilometrage
     */
    public function __construct($marque, $puissance, $kilometrage)
    {
        $this->marque = $marque;
        $this->puissance = $puissance;
        $this->kilometrage = $kilometrage;
    }

    public function affichageCaracteristique() {
        return 'Marque : '.$this->marque.'<br> Puissance : '.$this->puissance.'<br> Kilométrage : '.$this->kilometrage.'<br>';
    }

    public function ajoutPuissance($nouvellePuissance) {
        $this->puissance = $nouvellePuissance;
    }

    public function AjoutKilometrage($nouveauKilometrage){
        $this->kilometrage += $nouveauKilometrage;
    }
}

class Voiture extends Vehicule {

    //private $type = ['berline', 'suv', '4x4', 'break'];
    private $type;

    /**
     * @param string[] $type
     */
    public function __construct($marque, $puissance, $kilometrage, $type)
    {
        parent::__construct($marque, $puissance, $kilometrage);
        $this->type = $type;
    }

    public function lire_type() {
        if (in_array($this->type, ['berline', 'suv', '4x4', 'break'])){
            return 'Le type de la voiture est '.$this->type.'<br>';
        } else {
            return 'Le type est incorrect <br>';
        }
    }

}
