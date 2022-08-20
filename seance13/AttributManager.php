<?php

class AttributManager
{
    private $localhost;
    private $identifiant;
    private $mdp;
    private $dbname;
    private $db;

    /**
     * @param $localhost
     * @param $identifiant
     * @param $mdp
     * @param $dbname
     */
    public function __construct($localhost, $identifiant, $mdp, $dbname)
    {
        $this->localhost = $localhost;
        $this->identifiant = $identifiant;
        $this->mdp = $mdp;
        $this->dbname = $dbname;

        try{
            $this->db = new PDO('mysql:host='.$this->localhost.';dbname='.$this->dbname.'', $this->identifiant, $this->mdp);
        }catch(PDOException $e){
            die('Erreur : '.$e->getMessage());
        }
    }

    public function addAttributPersonnage($attribut, $id){

        //var_dump($attribut);
        //var_dump($id);

        $sth = $this->db->prepare('UPDATE Personnage SET attributs = :attributs where id = :id;');

        var_dump($sth);

        $sth->execute([
            ':id' => $id,
            ':attributs' => serialize($attribut->getAttributs())
        ]);

        var_dump($sth);

        echo $id;
    }

    public function getById($id){
        $sth2 = $this->db->prepare('SELECT * FROM Personnage WHERE id=:id;');
        $sth2->execute([
            ':id' => $id
        ]);
        $data = $sth2->fetch();
        //var_dump($data);
        $type = strtolower($data['typePersonnage']);

        switch ($type)
        {
            case 'gobelin' : $objet = new Gobelin();break;
            case 'elfe' : $objet = new Elfe();break;
            case 'humain' : $objet = new Humain();break;
        }

        $objet->place($data['x'], $data['y']);
        $objet->setNbPtDeVie($data['nbPtDeVie']);
        $objet->setNbPtDeForce($data['nbPtDeForce']);
        $objet->setAttributs($data['attributs']);
        return $objet;
    }

    public function getAll(){
        $resultat = $this->db->prepare('SELECT * FROM Personnage;');
        $resultat->execute();
        $tableau=array();
        //var_dump($resultat->fetch());
        while ($data = $resultat->fetch())
        {
            $tableau[] = $this->getById($data['id']);
        }
        //var_dump($tableau);
        return $tableau;
    }

    public function getIdPersonnage(){
        $sth = $this->db->prepare('SELECT * FROM Personnage;');
        $sth->execute();
        $tab = array();
        while ($data = $sth->fetch()){
            $tab[] = $data['id'];
        }
        return $tab;
    }

    public function getDataPersonnageById($id){
        $sth = $this->db->prepare('SELECT * FROM Personnage where id = '.$id.';');
        $sth->execute();
        $data = $sth->fetch();
/*        while ($data = $sth->fetch()){
            $tab[] = $data;
        }*/
        //var_dump($data);
        return $data;
    }

    public function updatePersonnage($personnage, $id){
        //var_dump($personnage);
        //var_dump($id);
        $sth = $this->db->prepare('UPDATE Personnage SET attributs = :attributs where id = :id;');

        $sth->execute([
            ':id' => $id,
            ':attributs' => serialize($personnage->getAttributs())
        ]);
        return $id;
        //return $this->db->lastInsertId();
    }

}
