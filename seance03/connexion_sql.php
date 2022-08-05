<?php

class ConnexionSQL
{
    private $adresseip;
    private $nombase;
    private $utilisateur;
    private $mdp;

    /**
     * @param $adresseip
     * @param $nombase
     * @param $utilisateur
     * @param $mdp
     */
    public function __construct($adresseip, $nombase, $utilisateur, $mdp)
    {
        $this->adresseip = $adresseip;
        $this->nombase = $nombase;
        $this->utilisateur = $utilisateur;
        $this->mdp = $mdp;
    }

    public function lire_connexion() {
        if (filter_var($this->adresseip, FILTER_VALIDATE_IP)){
            return 'L\'adresse IP : '.$this->adresseip.', le nom de la base de données : '.$this->nombase.' et l\'utilisateur : '.$this->utilisateur;
        } else {
            return 'L\'adresse IP : Incorrect ! Le nom de la base de données : '.$this->nombase.' et l\'utilisateur : '.$this->utilisateur;
        }
    }

}
