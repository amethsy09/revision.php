<?php
do {
    $a = readline("veuiller saisir le nombre ");
    
} while ($a <0);
$r = 0;
 for ($i=1; $i <=$a ; $i++) { 
    $somme = $somme + $i;
    $r++;
 }
 echo("la somme est de : $somme\n");
 $moyen = $somme/$r;
 echo("la moyenne est de : $moyen\n");