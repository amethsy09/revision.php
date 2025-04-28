<?php
$somme = 0;
do {
    $a = readline("veuiller saisir un nombre\n");
    
} while ($a <0);

for ($i=1; $i < $a/2; $i++) { 
    if ($a % $i == 0) {
        $somme = $somme + $i;
    }
}
if ($somme == $a) {
    echo("ce nombre est parfait\n");
    
}else{
    echo("ce nombre n'est pas parfait\n");
}
