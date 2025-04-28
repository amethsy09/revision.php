<!-- Exercice 3: Faire un programme qui calcule et affiche la division de a par b par soustractions successives -->
<?php
    $a =  readline("entrer le nombre a:");
    $b =  readline("entrer le nombre b:");
    $s = 0;
 while ($a >= $b) {
   
   $a = $a -$b ;
   echo("$a = $a -$b");
    $s++;
 }
echo("la division successive de a et b est : $s \n");
echo("le reste  de a et b est : $a \n");