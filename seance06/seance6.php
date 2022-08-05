<?php
//Source H. Boulet

// Mise en oeuvre de l'héritage
// IUT de Troyes - MMI

require 'VehiculeAMoteur.php';
//$vehicule1=new VehiculeAMoteur('E',5); // Impossible
echo 'Véhicule 1'.'<br>';
echo 'Instanciation impossible'.'<br>';
echo '<br>';

$vehicule2=new Voiture('T',5,'Renault',90);
echo 'Véhicule2 est un objet de '.get_class($vehicule2).'<br>';
echo $vehicule2->lireCaracteristique();
echo '<br>';
echo '<br>';

$vehicule3=new Voiture('E',7,'Tesla',450);
echo 'Véhicule3 est un objet de '.get_class($vehicule3).'<br>';
echo $vehicule3->lireCaracteristique();
echo '<br>';
echo '<br>';

$vehicule4=new VoitureDeSport('T',2,'Porsche',300,5);
echo 'Véhicule4 est un objet de '.get_class($vehicule4).'<br>';
echo $vehicule4->lireCaracteristique();
echo '<br>';
echo '<br>';

$vehicule5=new VoitureTourisme('T',4,'Fiat',70,5.5, 3000);
echo 'Véhicule5 est un objet de '.get_class($vehicule5).'<br>';
$vehicule5->utiliser(6000);
echo $vehicule5->lireCaracteristique();
echo '<br>';
echo '<br>';

$vehicule6=new Camion('T',1,16,2);
echo 'Véhicule6 est un objet de '.get_class($vehicule6).'<br>';
echo $vehicule6->lireCaracteristique();
echo '<br>';
echo '<br>';

$vehicule7=new Camion('T',1,24,3);
echo 'Véhicule7 est un objet de '.get_class($vehicule7).'<br>';
echo $vehicule7->lireCaracteristique();
echo '<br>';
echo '<br>';

echo 'Nombre d\'objets (instances) : '.VehiculeAMoteur::$nbVehicule;

?>
