<?php
do {
    $a = readline("veuiller saisir le cote ");
    
} while ($a <0);
$p = $a * 4;
$s = $a * $a;
echo("le perimetre est de :$p \n");
echo("la surface est de :$s \n");