exercice 4:
saisir le cote puis calculer et afficher le périmetre,la surface et la diagonale.
<?php
$side = readline("entrer le cote :");
$p = 4*$side;
$s = $side*$side;
$d = sqrt(2)*$side;
echo "un carré qui a pour coté $side a comme  périmètre:P = $p \n pour surface:S =$s\n et pour diagonale:D = $d\n";
?>
