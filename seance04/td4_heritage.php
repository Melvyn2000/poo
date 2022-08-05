<?php
include 'animal.php';

$bestiole = new Animal('Une drôle de bête', 1, 10);
$bestiole->manger('fruits');
$bestiole->manger('légumes');
echo $bestiole->lire_regime();
echo $bestiole->lire_informations();
$bestiole->vieillir(4);
echo $bestiole->lire_informations();
$bestiole->vieillir(6);
echo $bestiole->lire_informations();

echo '<br><br>';

$chien1 = new Chien('Chien', 2, 20, 'Médor');
echo $chien1->seNomme();
$chien1->manger('viande');
$chien1->manger('croquette');
echo $chien1->lire_regime();
echo $chien1->lire_informations();
