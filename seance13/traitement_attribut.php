<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">

    <title>Séance 12</title>
</head>
<body>
<?php
//header( "refresh:5;url=ajout_personnage.php" );
echo 'You\'ll be redirected in about 5 secs. If not, click <a href="Ajout_attribut.php">here</a>.</br></br>';
?>
<?php
require 'iPersonnage.php';
require 'Personnage.php';
require 'Attribut.php';
require 'Affichage.php';
require 'PersonnageManager.php';
require 'Elfe.php';
require 'Gobelin.php';
require 'Humain.php';
require 'AttributManager.php';

$idPersonnage = $_GET['idPersonnage'];
$typePersonnage = $_GET['typePersonnage'];
$x = $_GET['x'];
$y = $_GET['y'];
$attributs = $_GET['attributs'];
$nomAttributs = $_GET['nomAttributs'];
$nbDegats = $_GET['nbDegats'];
$nbProtections = $_GET['nbProtections'];

echo 'L\'id du personnage : '.$idPersonnage.'<br>';
echo 'Le type de personnage : '.$typePersonnage.'<br>';
echo 'Le placement en X : '.$x.'<br>';
echo 'Le placement en Y : '.$y.'<br>';
echo 'L\'attribut choisi(e) : '.$attributs.'<br>';
echo 'Le nom de l\'attribut : '.$nomAttributs.'<br>';
echo 'Nombre des points de dégâts : '.$nbDegats.'<br>';
echo 'Nombre des points de protection : '.$nbProtections.'<br>';
echo '<br>';

$pm = new AttributManager('localhost', 'root', 'root', 'poo2');

switch ($typePersonnage){
    case 'E':
        $perso1 = new Elfe();
        break;
    case 'G':
        $perso1 = new Gobelin();
        break;
    case 'H':
        $perso1 = new Humain();
        break;
}

$perso1->place($x, $y);

switch ($attributs){
    case 'A':
        $att = new Arme($nomAttributs, $nbDegats);
        break;
    case 'P':
        $att = new Protection($nomAttributs, $nbProtections);
        break;
    case 'M':
        $att = new Magie($nomAttributs, $nbDegats, $nbProtections);
        break;
}

$perso1->addAttribut($att);
var_dump($perso1);
$id = $pm->updatePersonnage($perso1, $idPersonnage);
echo '<p>Le personnage avec l\'id numéro '.$id.' a bien été mis à jour !</p>';

$pm->getAll();

?>

</body>
</html>
