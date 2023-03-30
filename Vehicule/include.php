<?php
include 'vehicule.php';

$mercedes = new Vehicule("Mercedes CLK",4,250);
$honda = new Vehicule("Honda CBR",2,280);

echo $mercedes->detect();
echo "<br>".$honda->detect();
$mercedes->boost();
echo "<br><br>La vitesse de ".$mercedes->getNom()." est de ".$mercedes->getVitesse()."km/h.";
echo "<br><br>Le véhicule le plus rapide est ".$mercedes->plusRapide($honda).".";

$tank = new Tank("Char Leclerc",100,30);
echo "<br>".$tank->detect(); //-> affiche Ce Véhicule est un tank
echo "<br>".$tank->detectSuperType(); //-> affiche Ce véhicule n'est ni une moto, ni une voiture.
echo "<br>".$tank->addition(5,4); //-> affiche 9

echo "<br>".Calculatrice::addition(1,2); //-> affiche 3
?>



?>