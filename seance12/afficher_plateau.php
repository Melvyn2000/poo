<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">

    <title>Séance 12 | Afficher plateau</title>
</head>
<body>
<?php
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

$pm = new PersonnageManager('localhost', 'root', 'root', 'poo2');

$personnages = $pm->getAll();

//var_dump($personnages);
foreach ($personnages as $personnage)
{
    Affichage::addPersonnage($personnage);
}
Affichage::affichePlateau();
?>
</body>
</html>
