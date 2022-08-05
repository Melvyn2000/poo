<?php

 abstract class Attribut
{

    protected $typeAttribut;
    protected $nom;

    /**
     * @param $typeAttribut
     * @param $nom
     */
    public function __construct($typeAttribut, $nom)
    {
        $this->typeAttribut = $typeAttribut;
        $this->nom = $nom;
    }
}

class Arme extends Attribut {

    protected $pointDeDegat;

    public function __construct($nom, $pointDeDegat)
    {
        parent::__construct('Arme', $nom);
        $this->pointDeDegat = $pointDeDegat;
    }

    public function affiche(){
        return '<b>L\'arme</b> est un/une '.$this->nom.' et il/elle produit '.$this->pointDeDegat.' points de dégâts <br>';
    }
}

class Protection extends Attribut {

    protected $pointDeProtection;

    public function __construct($nom, $pointDeProtection)
    {
        parent::__construct('Protection', $nom);
        $this->pointDeProtection = $pointDeProtection;
    }

    public function affiche(){
        return '<b>La protection</b> est un/une '.$this->nom.' et il/elle produit '.$this->pointDeProtection.' points de protection <br>';
    }
}

class Magie extends Attribut {

     protected $pointDeDegat;
     protected $pointDeProtection;

    public function __construct($nom, $pointDeDegat, $pointDeProtection)
    {
        parent::__construct('Magie', $nom);
        $this->pointDeDegat = $pointDeDegat;
        $this->pointDeProtection = $pointDeProtection;
    }

    public function affiche(){
        return '<b>La magie</b> est un/une '.$this->nom.', il/elle produit '.$this->pointDeDegat.' points de dégâts et '.$this->pointDeProtection.' points de protection <br>';
    }
}


