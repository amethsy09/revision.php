<?php 
// Les closures sont des fonctions anonymes capables de capturer des variables extérieures grâce à use
// syntaxe 
// $closure = function(param1, param2) use ($variableExterieure) {
//     // code
// };
$message = "Salut";

$direBonjour = function($nom) use ($message) {
    return "$message, $nom !";
};

echo $direBonjour("ahmed");