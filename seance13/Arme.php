<?php

class Arme extends Attribut
{
    protected $pointDeDegat;

    public function __construct($nom, $pointDeDegat)
    {
        parent::__construct('Arme',$nom);
        $this->setPointDeDegat($pointDeDegat);
        $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPointDeDegat()
    {
        return $this->pointDeDegat;
    }

    /**
     * @param mixed $pointDeDegat
     */
    public function setPointDeDegat($pointDeDegat)
    {
        $this->pointDeDegat = $pointDeDegat;
    }

    public function affiche()
    {
        return '<em>L\'arme est :</em> '.$this->getTypeAttribut().'<br><em>Point de dégâts :</em> '.$this->getPointDeDegat().'<br><br>';
    }


}