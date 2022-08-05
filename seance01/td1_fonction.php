<?php
// Déclaration de la fonction
function affichage_footer($nom, $date){
    return '<footer style="background-color:red;">'.$nom.' © Copyright <hr>'.$date.'</footer>';
}

// Appel de la fonction
echo affichage_footer('Garnier', '21/11/21');
?>
