<?php
// Déclaration d'un tableau 2 dimension
$tableau_notes = array();
// Ajout de données,$tableau_notes est un tableau de tableau
$tableau_notes[0] = array('Pierre',14);
$tableau_notes[1] = array('Paul',10);
$tableau_notes[2] = array('Jacques',12);

// Afficher la note de Paul
echo 'La note de Paul est '.$tableau_notes[1][1].'<br><br>';

// Boucle de lecture
foreach ($tableau_notes as $etudiant ) {
    // $etudiant est un tableau
    echo $etudiant[0] ; // nom de l'étudiant
  echo ' : ';
  echo $etudiant[1] ; // note de l'étudiant
  echo '<br>';
}
?>
