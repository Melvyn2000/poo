<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fichier de traitement de la séance 11</title>
</head>
<body>
<h1>Fichier "traitement2.php" du deuxième formulaire de la séance 10</h1>
<h2>Affichage des données saisies dans le formulaire</h2>
<ul>
    <?php
    echo '<li> Login : '.$_GET['login'].'</li>';
    echo '<li> Password : '.$_GET['password'].'</li>';
    ?>
</ul>
</body>
</html>
