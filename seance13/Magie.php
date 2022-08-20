<?php

class Magie extends Attribut
{
    protected $pointDeDegat;
    protected $pointDeProtection;

    public function __construct($nom, $pointDeDegat, $pointDeProtection)
    {
        parent::__construct('Magie', $nom);
        $this->setPointDeDegat($pointDeDegat);
        $this->setPointDeProtection($pointDeProtection);

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

    /**
     * @return mixed
     */
    public function getPointDeProtection()
    {
        return $this->pointDeProtection;
    }

    /**
     * @param mixed $pointDeProtection
     */
    public function setPointDeProtection($pointDeProtection)
    {
        $this->pointDeProtection = $pointDeProtection;
    }

    public function affiche()
    {
        return '<em>L\'attribut est : </em>'.$this->getNom().'<br> <em>Point de dégâts : </em>' . $this->getPointDeDegat().'<br><em> Point de protection : </em>'.$this->getPointDeProtection().'<br><br>';
    }



}