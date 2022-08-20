<?php

class Gobelin extends Personnage
{

    public function __construct()
    {
        parent::__construct('Gobelin',80,120);
    }

    public function addAttribut($attribut)
    {
        if ($attribut instanceof Arme)
        {
            $this->attributs[] = $attribut;
        } elseif ($attribut instanceof Protection)
        {
            $this->attributs[]=$attribut;
        } else {
            echo 'Uniquement des attributs d\'armes ou de protections sont possible';
        }
    }

}