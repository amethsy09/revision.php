<?php 
// Les enums définissent un ensemble fixe de constantes.
// Syntaxe
// enum NomEnum {
//     case Valeur1;
//     case Valeur2;
// }

// enum Role: string {
//     case Admin = 'admin';
//     case User = 'user';
// }

// echo Role::Admin->value; 
class Role
{
    const Admin = 'admin';
    const User = 'user';
}

echo Role::Admin; 