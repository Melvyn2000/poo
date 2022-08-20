<head>
    <meta charset="UTF-8">
    <title>Ajout d'un attribut</title>
</head>
<body>
<?php
include('iFormulaire.php');
include('Formulaire.php');
include ('AttributManager.php');

/*$conn = new AttributManager('localhost', 'root', 'root', 'poo2');
$test = $conn->getIdPersonnage();
//var_dump($test);
$newTab = [];
foreach ($test as $value){
    $newTab = [$value => $value];
}
var_dump($newTab);*/

$idPersonnage = $_GET['idPersonnage'];
//echo $idPersonnage.'<br>';

$conn = new AttributManager('localhost', 'root', 'root', 'poo2');
$test1 = $conn->getDataPersonnageById($idPersonnage);
//var_dump($test1);

//var_dump($test1['id']);

echo '<h1>Nouvelle attribut</h1>';
echo '<p style="font-weight: bold;background-color: red;font-style: italic;">Ne pas oublier de mettre la method en post par la suite !</p>';
$form1 = new Formulaire('traitement_attribut.php', 'get', 'form1');

//Mettre le type de personnage par rapport aux datas récupérer par l'id
switch ($test1['typePersonnage']){
    case 'Elfe':
        $tabTypePersonnage = array('E' => 'Elfe');
        break;
    case 'Gobelin':
        $tabTypePersonnage = array('G' => 'Gobelin');
        break;
    case 'Humain':
        $tabTypePersonnage = array('H' => 'Humain');
        break;
}
$form1->ajoutChampSimple('', 'hidden', 'idPersonnage', '', '', $test1['id']);

$form1->ajoutChampSelect('Type de personnage', 'typePersonnage', $tabTypePersonnage);

//Mettre le placement en x par rapport aux datas récupérer par l'id
$form1->ajoutChampSimple('Placement en X', 'number', 'x', '', '', $test1['x']);

//Mettre le placement en y par rapport aux datas récupérer par l'id
$form1->ajoutChampSimple('Placement en Y', 'number', 'y', '', '', $test1['y']);

//Sélectionner le type de personnage par rapport aux datas récupérer par l'id
$form1->ajoutChampSelect('Sélection d\'un attribut', 'attributs', array('A' => 'Arme', 'P' => 'Protection', 'M' => 'Magie'));

//Sélectionner le nom de l'attribut
$form1->ajoutChampSimple('Nom Attribut', 'text', 'nomAttributs');

//Attribuer les points de dégats de l'attribut
$form1->ajoutChampSimple('Point de dégâts', 'text', 'nbDegats');

//Attribuer les points de protection de l'attribut
$form1->ajoutChampSimple('Point de protection', 'text', 'nbProtections');

$form1->ajoutBoutonSubmit('Créer');
echo $form1->genereFormulaireHTML();
?>
</body>
</html>
