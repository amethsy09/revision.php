<?php
// exercice1:
// saisir un nombre puis determine et affiche son signe.
// $nombre = readline("Saisir un nombre :");
//  if ($nombre > 0) {
//     echo "Le nombre est positif.\n";
//     } elseif ($nombre < 0) {
//         echo "Le nombre est négatif.\n";
//         } else
//         {
//             echo "Le nombre est null.\n";
//             }
// exercice2:
// saisir la valeur d'un mois (entier) puis afficher sa correspondance en chaine.
$mois = readline("Saisir le mois  :");
switch ($mois) {
    case 1:
        echo "Janvier\n";
        break;
        case 2:
            echo "Février\n";
            break;
            case 3:
                echo "Mars\n";
                break;
                case 4:
                    echo "Avril\n";
                    break;
                    case 5:
                        echo "Mai\n";
                        break;
                       
                        case 6:
                            echo "Juin\n";
                            break;
                           
                            case 7:
                                echo "Juillet\n";
                                break; 
                               
                                case 8:
                                   
                                    echo "Août\n";
                                   
                                    break;
                                   
                                    case 9:
                                       
                                        echo "Septembre\n";
                                        break;
                                       
                                        case 10:
                                           
                                            echo "Octobre\n";
                                            break;
                                           
                                            case 11:
                                               
                                                echo "Novembre\n";
                                                break;
                                               
                                                case 12:
                                                   
                                                    echo "Décembre\n";
                                            default:
                                            echo "Mois non valide\n";
                                            break;
    }

