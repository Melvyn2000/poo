<?php
interface iEleve
{
    public function afficheNomPrenom();

    public function convoque($date, $heure);

    public function ajouteNote($note);

    public function afficheNotes();
}
class Eleve implements iEleve
{
    private $nom;
    private $prenom;
    private $tableauDeNotes = [];

    /**
     * @param $nom
     * @param $prenom
     * @param $tableauDeNotes
     */
    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function afficheNomPrenom()
    {
        // TODO: Implement afficheNomPrenom() method.
        return 'Nom et Prénom de l\'élève : '.$this->nom.' '.$this->prenom.'<br>';
    }

    public function convoque($date, $heure)
    {
        // TODO: Implement convoque() method.
        return 'L\'élève : '.$this->nom.' '.$this->prenom.' est convoqué pour le '.$date.' à '.$heure.' dans le bureau du directeur<br>';
    }

    public function ajouteNote($note)
    {
        // TODO: Implement ajouteNote() method.
        $this->tableauDeNotes[] = $note;
    }

    public function afficheNotes()
    {
        // TODO: Implement afficheNotes() method.
        //var_dump($this->tableauDeNotes);
        foreach ($this->tableauDeNotes as $result){
            echo $result.'<br>';
        }
    }

}
