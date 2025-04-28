<?php
//  les arguments peuvent être passés par leur nom au lieu de leur position.
// syntaxe 
// fonctionNom(param1: valeur1, param2: valeur2);
function afficherProfil($nom, $age, $ville) {
    echo "$nom, $age ans, habite à $ville.";
}

afficherProfil(
    age: 22,
    ville: "dakar",
    nom: "ahmad"
);