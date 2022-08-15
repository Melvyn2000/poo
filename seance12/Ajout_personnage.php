<head>
    <meta charset="UTF-8">
    <title>Ajout d'un personnage</title>
</head>
<body>
<?php
include('iFormulaire.php');
include('Formulaire.php');
echo '<h1>Nouveau personnage</h1>';
echo '<p style="font-weight: bold;background-color: red;font-style: italic;">Ne pas oublier de mettre la method en post par la suite !</p>';
$form1 = new Formulaire('traitement_personnage.php', 'get', 'form1');
$form1->ajoutChampSelect('Type de personnage', 'typePersonnage', array('E' => 'Elfe', 'G' => 'Gobelin', 'H' => 'Humain'));
$form1->ajoutChampSimple('Placement en X', 'number', 'x');
$form1->ajoutChampSimple('Placement en Y', 'number', 'y');
echo '<br><ul> ATTENTION RÈGLE ATTRIBUTS !
<li>Un <b>humain</b> peut avoir 2 armes et 1 protection.</li>
<li>Un <b>elfe</b> ne peut avoir que de la magie à l\'infini.</li>
<li>Un <b>gobelin</b> peut avoir 1 arme et 1 protection.</li>
</ul>';

echo '<br><ul> Si l\'attribut sélectionné(e) est ... !
<li>Une <b>arme</b> choisissez-lui un <b>nom</b> et donnez-lui des <b>points de dégâts</b></li>
<li>Une <b>protection</b> choisissez-lui un <b>nom</b> et donnez-lui des <b>points de protection</b></li>
<li>De la <b>magie</b> choisissez-lui un <b>nom</b> puis donnez-lui des <b>points de dégâts</b> et des <b>points de protection</b></li>
</ul>';
$form1->ajoutChampSelect('Sélection d\'un attribut', 'attributs', array('A' => 'Arme', 'P' => 'Protection', 'M' => 'Magie'));
$form1->ajoutChampSimple('Nom Attribut', 'text', 'nomAttributs');
$form1->ajoutChampSimple('Point de dégâts', 'text', 'nbDegats');
$form1->ajoutChampSimple('Point de protection', 'text', 'nbProtections');
$form1->ajoutBoutonSubmit('Créer');
echo $form1->genereFormulaireHTML();
?>
</body>
</html>
