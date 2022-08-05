<?php
//----------------------------------------------------
// fichier : seance3_exo2.php2
// ---------------------------------------------------
// Notion d'encapsulation : protection des propriétés
// de l'objet.
// IUT de Troyes - MMI 2ème année
//----------------------------------------------------

require 'personne2.php';

// Nouvelle instance de class.Personne
$etudiant=new Personne2('Martin','Paul',19); // le nom est en minuscules

echo $etudiant->sePresente().'<br>'; //Je m'appelle Paul MARTIN et j'ai 19 ans (nom en majuscules)

// Modification de l'attribut Nom
$etudiant->setNom('Durand'); // nom en minuscules
echo $etudiant->sePresente().'<br>'; // Je m'appelle Paul DURAND et j'ai 19 ans (nom en majuscules)
?>
