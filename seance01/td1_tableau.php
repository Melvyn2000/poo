<?php
// Déclaration d'un tableau 1 dimension
$tableau_notes = array(12, 14, 10);

// Valeur de la 1ère note directement grâce à l'indice
echo 'La première note est '.$tableau_notes[0];
echo '<br>';

// Ajout la note de 15 dans le tableau $tableau_notes
$tableau_notes[] = 15 ;

// Boucle de lecture
var_dump($tableau_notes);
foreach ($tableau_notes as $notes) {
    echo $notes .'<br>';
}
echo 'Nombre de notes : '.count($tableau_notes);
?>
