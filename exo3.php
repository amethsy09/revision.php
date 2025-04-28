<!-- exercice3:
saisir deux points puis calculer et afficher la distance entre les deux points.un point est caracterise par son abscisse et son ordonnee. -->
<?php
$nb1 = (float)readline("Saisir le premier point :");
$nb2 = (float)readline("Saisir le deuxième point :");
$nb3 = (float)readline("Saisir le troisième point :");
$nb4 = (float)readline("Saisir le quatrième point :");
$diss = sqrt(pow(($nb2-$nb1),2)+pow(($nb4-$nb3),2));
echo "La distance entre les deux points est de: $diss";

?>