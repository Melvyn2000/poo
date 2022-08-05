<?php
// Déclaration d'un tableau associatif
$tableau_notes = array("Partiel"=>15, "TP"=>11);

// Valeur de la 1ère note directement grâce à son nom
echo 'Note du partiel : '.$tableau_notes['Partiel'].'<br><br>';

//boucle pour afficher les notes avec leur clé
foreach ($tableau_notes as $examen => $notes) {
    echo 'Note du '.$examen.' : '.$notes;
  echo '<br>';
}
?>
