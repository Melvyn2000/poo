<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">

    <title>Séance 10</title>
</head>
<body>
<?php
require 'iPersonnage.php';
require 'Personnage.php';
require 'Attribut.php';
require 'Affichage.php';
require 'PersonnageManager.php';

$pm = new PersonnageManager('localhost', 'root', 'root', 'poo2');
$perso1 = new Gobelin();
$perso1->place(2, 3);
var_dump($perso1);
$id = $pm->addPersonnage($perso1);
echo '<p>Personnage ajouté avec l\'id numéro '.$id.'</p>';

$perso2 = $pm->getById($id);
var_dump($perso2);
Affichage::addPersonnage($perso2);
Affichage::affichePlateau();

$perso3 = new Elfe();
$perso3->place(5, 7);
$att1 = new Magie('Invisibilité', 15, 15);
$att2 = new Magie('Feu', 0,30);

$perso3->addAttribut($att1);
$perso3->addAttribut($att2);
$id = $pm->addPersonnage($perso3);
echo '<p>Personnage ajouté avec l\'id numéro '.$id.'</p>';

$perso4 = $pm->getById($id);
Affichage::addPersonnage($perso4);
echo '<br>';
echo $perso4->afficherAttributs();
Affichage::affichePlateau();

$pm->getAll();
?>
</body>
</html>
