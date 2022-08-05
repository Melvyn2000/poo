<?php
//----------------------------------------------------
// fichier : seance3_exo1.php
// ---------------------------------------------------
// Notion d'encapsulation : protection des propriétés
// de l'objet.
// IUT de Troyes - MMI 2ème année
//----------------------------------------------------

require 'personne.php';
// Nouvelle instance de class.Personne
$etudiant=new Personne('Martin','Paul',19);
echo $etudiant->sePresente().'<br>'; //Je m'appelle Paul Martin et j'ai 19 ans
// Modification de l'attribut Nom
$etudiant->nom='Durand';
echo $etudiant->sePresente().'<br>'; // Je m'appelle Paul Durand et j'ai 19 ans
?>
