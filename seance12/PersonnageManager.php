<?php

class PersonnageManager
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
     * @param $BDD
     */
    public function __construct($localhost, $identifiant, $mdp, $dbname)
    {
        $this->localhost = $localhost;
        $this->identifiant = $identifiant;
        $this->mdp = $mdp;
        $this->dbname = $dbname;
        $this->db = new PDO('mysql:host='.$this->localhost.';dbname='.$this->dbname.'', $this->identifiant, $this->mdp);
    }

    public function addPersonnage($personnage){
        $sth = $this->db->prepare('INSERT INTO Personnage (typePersonnage, nbPtDeVie, nbPtDeForce, x, y, attributs) VALUES (:getTypePersonnage, :getNbPtDeVie, :getForce, :getX, :getY, :attributs);');
        $sth->execute([
            ':getTypePersonnage' => $personnage->getTypePersonnage(),
            ':getNbPtDeVie' => $personnage->getNbPtDeVie(),
            ':getForce' => $personnage->getNbPtDeForce(),
            ':getX' => $personnage->getX(),
            ':getY' => $personnage->getY(),
            ':attributs' => serialize($personnage->getAttributs())
        ]);
        return $this->db->lastInsertId();
    }

    public function getById($id){
/*        $recup = $this->db->query('SELECT * FROM `Personnage` WHERE id='.$id.';');
        //var_dump($recup);
        while ($ligne = $recup->fetch()){
            echo $ligne['typePersonnage'];
            switch ($ligne['typePersonnage']){
                case 'Gobelin':
                    $personnage = new Gobelin();
                    break;
                case 'Elfe':
                    $personnage = new Elfe();
                    break;
                case 'Humain':
                    $personnage = new Humain();
                    break;
            }
            //var_dump($recup);
            $personnage->setTypePersonnage($ligne['typePersonnage']);
            $personnage->setNbPtDeVie($ligne['nbPtDeVie']);
            $personnage->setNbPtDeForce($ligne['nbPtDeForce']);
            $personnage->setX($ligne['x']);
            $personnage->setY($ligne['y']);
            $personnage->setAttributs($ligne['attributs']);
            return $personnage;
        }*/
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
/*        $recup = $this->db->query("SELECT * FROM Personnage ;" );
        //var_dump($recup);
        $html = '<table class="table">
                        <thead class="thead">
                            <tr>
                                <th colspan="7">Liste des personnages</th>
                            </tr>
                        </thead>
                        <tbody>';
        while ($ligne = $recup->fetch()){
            $html .= '<tr>
                        <td class="td">'.$ligne['id'].'</td>
                        <td class="td">'.$ligne['typePersonnage'].'</td>
                        <td class="td">'.$ligne['nbPtDeVie'].'</td>
                        <td class="td">'.$ligne['nbPtDeForce'].'</td>
                        <td class="td">'.$ligne['x'].'</td>
                        <td class="td">'.$ligne['y'].'</td>
                        <td class="td">'.$ligne['attributs'].'</td>
                      </tr>';
        }
        $html .= '</tbody>
                    </table>';
        echo $html;*/

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
}
