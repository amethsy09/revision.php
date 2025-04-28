<!-- exercice2:
saisir deux nombres puis faire leur permutation.On affichera les deux nombres avant et apres. -->
<?php
$nb1 = readline("Saisir le premier nombre :");
$nb2 = readline("Saisir le deuxième nombre :");
echo "Avant permutation : $nb1\n $nb2\n";
$nb3 = $nb1;
$nb1 = $nb2;
$nb2 = $nb3;
echo "la nouvelle valeur est : $nb1\n";
echo "la nouvelle valeur est : $nb2\n";
?>