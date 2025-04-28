<?php
// Les fonctions anonymes sont des fonctions sans nom, stockées dans une variable ou passées comme paramètres
// Syntaxe
// $fonction = function(param1, param2, ...) {
//     // code
// };
$bonjour= function($nom) {
    return "Bonjour, $nom !";
};
echo $bonjour("sy");