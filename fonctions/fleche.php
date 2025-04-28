<?php

// <!-- Les fonctions fléchées sont une syntaxe courte pour définir des fonctions anonymes. -->
//  <!-- syntaxe -->
  $carre = fn($x)=> $x * $x;
$x = readline("veuiller saisir x");
echo $carre($x);