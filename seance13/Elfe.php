<?php

class Elfe extends Personnage
{
    protected $typePersonnage='Elfe';
    protected $nbPtDeVie=120;
    protected $nbPtDeForce=80;

    public function __construct()
    {
        parent::__construct('Elfe',120,80);
    }

    public function addAttribut($attribut)
    {
        if ($attribut instanceof Magie)
        {
            $this->attributs[] = $attribut;
        } else {
            echo 'Uniquement des attributs de magie sont possible';
        }
    }
}