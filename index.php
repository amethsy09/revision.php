<?php

function addition(int $a, int $b): int {
    return $a + $b;
}

function soustraction(int $a, int $b): int {
    return $a - $b;
}

function multiplication(int $a, int $b): int {
    return $a * $b;
}

function division(int $a, int $b): float {
    return $b != 0 ? $a / $b : 0;
}

// Fonction calculatrice principale
function calculatrice() {
    do {
        echo "\n===== MENU PRINCIPAL =====\n";
        echo "1. Addition\n";
        echo "2. Soustraction\n";
        echo "3. Multiplication\n";
        echo "4. Division\n";
        echo "5. Quitter\n";

        $choix = (int)readline("Entrez votre choix : ");

        if ($choix >= 1 && $choix <= 4) {
            $x = (int)readline("Entrez le premier nombre : ");
            $y = (int)readline("Entrez le deuxième nombre : ");
        }

        switch ($choix) {
            case 1:
                echo "\n--- Addition ---\n";
                echo "Résultat : " . addition($x, $y) . "\n";
                break;

            case 2:
                echo "\n--- Soustraction ---\n";
                echo "Résultat : " . soustraction($x, $y) . "\n";
                break;

            case 3:
                echo "\n--- Multiplication ---\n";
                echo "Résultat : " . multiplication($x, $y) . "\n";
                break;

            case 4:
                echo "\n--- Division ---\n";
                if ($y == 0) {
                    echo "Erreur : Division par zéro impossible\n";
                } else {
                    echo "Résultat : " . division($x, $y) . "\n";
                }
                break;

            case 5:
                echo "\nFIN DU PROGRAMME !\n";
                break;

            default:
                echo "\nChoix invalide, veuillez réessayer.\n";
                break;
        }
    } while ($choix != 5);
}

// Appel de la fonction calculatrice
calculatrice();

// deuxieme methodes 
// <?php
// Enumération pour les opérations
// enum Operation: string {
//     case ADDITION = 'Addition';
//     case SUBTRACTION = 'Soustraction';
//     case MULTIPLICATION = 'Multiplication';
//     case DIVISION = 'Division';
// }

// Fonction fléchée (PHP 7.4+)
// $addition = fn(int $a, int $b): int => $a + $b;

// Fonction anonyme
// $soustraction = function(int $a, int $b): int {
//     return $a - $b;
// };

// Closure avec utilisation de variable externe
// $multiplicateur = 1;
// $multiplication = function(int $a, int $b) use (&$multiplicateur): int {
//     return $a * $b * $multiplicateur;
// };

// Fonction avec arguments nommés
// function division(int $dividende, int $diviseur): float {
//     return $diviseur != 0 ? $dividende / $diviseur : NAN;
// }

// function calculatrice() {
//     global $addition, $soustraction, $multiplication;
    
//     do {
//         echo "\n===== MENU PRINCIPAL =====\n";
//         echo "1. " . Operation::ADDITION->value . "\n";
//         echo "2. " . Operation::SUBTRACTION->value . "\n";
//         echo "3. " . Operation::MULTIPLICATION->value . "\n";
//         echo "4. " . Operation::DIVISION->value . "\n";
//         echo "5. Quitter\n";

//         $choix = (int)readline("Entrez votre choix : ");

//         if ($choix >= 1 && $choix <= 4) {
//             $x = (int)readline("Entrez le premier nombre : ");
//             $y = (int)readline("Entrez le deuxième nombre : ");
//         }

//         switch ($choix) {
//             case 1:
//                 echo "\n--- " . Operation::ADDITION->value . " ---\n";
//                 echo "Résultat : " . $addition($x, $y) . "\n";
//                 break;

//             case 2:
//                 echo "\n--- " . Operation::SUBTRACTION->value . " ---\n";
//                 echo "Résultat : " . $soustraction($x, $y) . "\n";
//                 break;

//             case 3:
//                 echo "\n--- " . Operation::MULTIPLICATION->value . " ---\n";
//                 echo "Résultat : " . $multiplication($x, $y) . "\n";
//                 break;

//             case 4:
//                 echo "\n--- " . Operation::DIVISION->value . " ---\n";
//                 $resultat = division(dividende: $x, diviseur: $y);
//                 if (is_nan($resultat)) {
//                     echo "Erreur : Division par zéro impossible\n";
//                 } else {
//                     echo "Résultat : " . $resultat . "\n";
//                 }
//                 break;

//             case 5:
//                 echo "\nFIN DU PROGRAMME !\n";
//                 break;

//             default:
//                 echo "\nChoix invalide, veuillez réessayer.\n";
//                 break;
//         }
//     } while ($choix != 5);
// }

// Appel de la fonction calculatrice
// calculatrice();