<?php

class Humain extends Personnage
{
    private $nbArmes;

    public function __construct()
    {
        parent::__construct('humain', 100, 100);

    }

    public function addAttribut($attribut)
    {
        if ($attribut instanceof Arme && $this->nbArmes<2)
            {
              $this->attributs[]=$attribut;
              $this->nbArmes++;
            } elseif ($attribut instanceof Protection)
        {
            $this->attributs[]= $attribut;
        } else {
            echo 'Uniquement des attributs (x2) Armes et protections sont possible';
        }

    }


}