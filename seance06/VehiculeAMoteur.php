<?php

abstract class VehiculeAMoteur
{

    protected $typeMoteur;
    protected $nbPassagers;
    static $nbVehicule;

    /**
     * @param $typeMoteur
     * @param $nbPassagers
     */
    public function __construct($typeMoteur, $nbPassagers)
    {
        $this->typeMoteur = $typeMoteur;
        $this->nbPassagers = $nbPassagers;
        self::$nbVehicule++;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        self::$nbVehicule--;
    }

    public function verificationType($type){
        switch ($type) {
            case 'T':
                return 'Le type du moteur est thermique';
                break;

            case 'E':
                return 'Le type du moteur est électrique';
                break;

            default:
                return 'Le type du moteur est probablement incorrect';
        }
    }

    public function verificationNbPassager($nombresPassagers) {
        if (is_int($nombresPassagers)){
            $this->nbPassagers = $nombresPassagers;
        }
    }

}

class Voiture extends VehiculeAMoteur{

    protected $marque;
    protected $puissance;

    /**
     * @param $marque
     * @param $puissance
     */

    public function __construct($typeMoteur, $nbPassagers, $marque, $puissance)
    {
        parent::__construct($typeMoteur, $nbPassagers);
        $this->marque = $marque;
        $this->puissance = $puissance;
    }

    public function lireCaracteristique(){
        return 'Le type du moteur : '.$this->typeMoteur.', le nombre de passagers : '.$this->nbPassagers.', la marque : '.$this->marque.' et la puissance : '.$this->puissance;
    }

}

final class VoitureDeSport extends Voiture {

    private $nbSecondes;

    /**
     * @param $nbSecondes
     */
    public function __construct($typeMoteur, $nbPassagers, $marque, $puissance, $nbSecondes)
    {
        parent::__construct($typeMoteur, $nbPassagers, $marque, $puissance);
        $this->nbSecondes = $nbSecondes;
    }

    public function lireCaracteristique(){
        return parent::lireCaracteristique().', la nombre de secondes de zéro à cents : '.$this->nbSecondes;
    }

}

class VoitureTourisme extends Voiture {

    protected $consommation;
    protected $kilometrage;

    /**
     * @param $consommation
     * @param $kilometrage
     */
    public function __construct($typeMoteur, $nbPassagers, $marque, $puissance, $consommation, $kilometrage)
    {
        parent::__construct($typeMoteur, $nbPassagers, $marque, $puissance);
        $this->consommation = $consommation;
        $this->kilometrage = $kilometrage;
    }

    public function lireCaracteristique(){
        return parent::lireCaracteristique().', la consommation : '.$this->consommation.', le kilométrage : '.$this->kilometrage;
    }

    public function utiliser($distance) {
        $this->kilometrage += $distance;
    }

}

class Camion extends VehiculeAMoteur {

    protected $tonnage;
    protected $nbEssieux;

    /**
     * @param $tonnage
     * @param $nbEssieux
     */
    public function __construct($typeMoteur, $nbPassagers, $tonnage, $nbEssieux)
    {
        parent::__construct($typeMoteur, $nbPassagers);
        $this->tonnage = $tonnage;
        $this->nbEssieux = $nbEssieux;
    }

    public function lireCaracteristique(){
        return 'Le type du moteur : '.$this->typeMoteur.', le nombre de passagers : '.$this->nbPassagers.', le tonnage : '.$this->tonnage.' et le nombre d\'essieux : '.$this->nbEssieux;
    }


}
