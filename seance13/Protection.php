<?php

class Protection extends Attribut
{
    protected $pointDeProtection;

    public function __construct($nom, $pointDeProtection)
    {
        parent::__construct('Protection',$nom);
        $this->setPointDeProtection($pointDeProtection);
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
        return '<em>L\'arme est :</em> '.$this->getNom().'<br><em>Point de protection :</em> ' . $this->getPointDeProtection().'<br><br>';
    }
}