<?php

abstract class Personnage implements iPersonnage
{
    protected $typePersonnage;
    protected $nbPtDeVie=100;
    protected $nbPtDeForce=100;
    protected $x;
    protected $y;
    static $nbPersonnages;
    protected $attributs=array();

    public function __construct($typePersonnage, $nbPtDeVie, $nbPtDeForce)
    {
        $this->setTypePersonnage($typePersonnage);
        $this->setNbPtDeVie($nbPtDeVie);
        $this->setNbPtDeForce($nbPtDeForce);
        self::$nbPersonnages++;
    }

    public function __destruct()
    {
        self::$nbPersonnages--;
    }

    /**
     * @return mixed
     */
    public function getTypePersonnage()
    {
        return $this->typePersonnage;
    }

    /**
     * @param mixed $typePersonnage
     */
    public function setTypePersonnage($typePersonnage)
    {
        $this->typePersonnage = $typePersonnage;
    }

    /**
     * @return int
     */
    public function getNbPtDeVie()
    {
        return $this->nbPtDeVie;
    }

    /**
     * @param int $nbPtDeVie
     */
    public function setNbPtDeVie($nbPtDeVie)
    {
        $this->nbPtDeVie = $nbPtDeVie;
    }

    /**
     * @return int
     */
    public function getNbPtDeForce()
    {
        return $this->nbPtDeForce;
    }

    /**
     * @param int $nbPtDeForce
     */
    public function setNbPtDeForce($nbPtDeForce)
    {
        $this->nbPtDeForce = $nbPtDeForce;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getNbPersonnages()
    {
        return $this->nbPersonnages;
    }

    /**
     * @param mixed $nbPersonnages
     */
    public function setNbPersonnages($nbPersonnages)
    {
        $this->nbPersonnages = $nbPersonnages;
    }

    /**
     * @return array
     */
    public function getAttributs()
    {
        return $this->attributs;
    }

    /**
     * @param array $attributs
     */
    public function setAttributs($attributs)
    {
        $this->attributs = $attributs;
    }

    public function place($x, $y)
    {
        $this->x=$x;
        $this->y=$y;
    }

    public function deplaceX($x = 1)
    {
    $this->x+=$x;
    }

    public function deplaceY($y = 1)
    {
        $this->y+=$y;
    }

    public function affichePersonnage()
    {
        return '<em>La race :</em> '.$this->getTypePersonnage().'<br> <em>La vie :</em> <b>'.$this->getNbPtDeVie().'</b><br> <em>La force :</em> <b>'.$this->getNbPtDeForce().'</b><br>';
    }


    public function afficherAttributs()
    {
        $lignes=' <b>La liste des attributs : </b><br>';
        foreach ($this->attributs as $values)
        {
            $lignes.=$values->affiche();

        }
        return $lignes;
    }
}