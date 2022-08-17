<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Séance 12 et 13</title>
</head>
<body>
<?php
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});
require 'iPersonnage.php';
require 'Personnage.php';
require 'Attribut.php';
require 'Affichage.php';
require 'PersonnageManager.php';
?>


<ul>
    <li><a href="ajout_personnage.php">Ajouter un personnage</a></li>
    <li><a href="ajout_attribut.php">Ajouter un attribut</a></li><!-- A faire en séance 13 -->
    <li><a href="afficher_plateau.php">Afficher le plateau</a></li>
</ul>

</body>
</html>
