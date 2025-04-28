<?php 
$a = readline("entrer le nombre a:");
$b = readline("entrer le nombre b:");
$somme = $a + $b ;
echo "la somme est de : $somme\n";
// la difference
$a = (float)readline("entrer le nombre a:");
$b = (float)readline("entrer le nombre b:");
$difference = $a - $b ;
echo "la difference est de : $difference\n";
// le produit
$a = (float)readline("entrer le nombre a:");
$b = (float)readline("entrer le nombre b:");
$produit = $a * $b ;
echo "le produit  est de : $produit\n";
// la division
$a = (float)readline("entrer le nombre a:");
$b = (float)readline("entrer le nombre b:");
$division = $a / $b ;
echo "la division est de : $division\n";
// le modulo
$a = (float)readline("entrer le nombre a:");
$b = (float)readline("entrer le nombre b:");
$modulo = $a % $b ;
echo "le modulo est de : $modulo\n";
// le carre de a
$a = (float)readline("entrer le nombre a:");
$carre = $a * $a ;
echo "le carre est de : $carre\n";
// le carre de b
$b = (float)readline("entrer le nombre b:");
$carre = $b * $b ;
echo "le carre est de : $carre\n";
// L'exponentiel
$a = (float)readline("entrer le nombre a:");
$b = (float)readline("entrer le nombre b:");
$exponentiel = pow($a, $b);
echo "l'exponentiel est de : $exponentiel \n";
?>