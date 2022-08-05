<?php
require 'HTML.php';
require 'eleve.php';
// Instanciation
$doc = new HTML('La Programmation Objet');
// Appels des méthodes
$doc->ajoutTitre('La POO', 2);
$doc->ajoutParagraphe('La POO c\'est formidable');
$doc->ajoutParagraphe('Les étudiants en redemandent');
$doc->ajoutParagraphe('surtout en MMI 2ème année');
$doc->ajoutsaut();
$doc->ajoutTitre('Les TDs', 2);
$doc->ajoutParagraphe('Les étudiants adorent écrire du code PHP');
$doc->ajoutParagraphe('Incroyable mais vrai');
$doc->ajoutsaut();
echo $doc->affiche();


$eleve1 = new Eleve('Garnier', 'Melvyn');
echo $eleve1->afficheNomPrenom();
$eleve1->ajouteNote(9);
$eleve1->ajouteNote(3);
$eleve1->ajouteNote(4);
$eleve1->afficheNotes();
echo $eleve1->convoque('09/09', '10h30');
?>
