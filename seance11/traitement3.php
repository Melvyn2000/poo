<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fichier de traitement de la séance 11</title>
</head>
<body>
<h1>Fichier "traitement3.php" du troisième formulaire de la séance 10</h1>
<h2>Affichage des données saisies dans le formulaire</h2>
<ul>
    <?php
    echo '<li> Nom : '.$_POST['nom'].'</li>';
    echo '<li> Prénom : '.$_POST['prenom'].'</li>';
    echo '<li> Date de naissance : '.$_POST['datenaissance'].'</li>';
    ?>
</ul>
</body>
</html>
