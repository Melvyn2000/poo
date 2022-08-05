<?php
//----------------------------------------------------
// fichier : personne.php
// ---------------------------------------------------
// Notion d'encapsulation : protection des propriétés
// de l'objet.
// IUT de Troyes - MMI 2ème année
//----------------------------------------------------

class Personne {
    // Définition des attributs de la classe
    private $prenom;
    private $nom;
    private $age;

    // Définition de la fonction constructeur
    public function __construct($n,$p,$a) {
        $this->nom=$n;
        $this->prenom=$p;
        $this->age=$a;
    }

    // Définition du comportement sePresente()
    public function sePresente() {
        return 'Je m\'appelle '.$this->prenom.' '.$this->nom.' et j\'ai '.$this->age.' ans ';
    }
}
?>
