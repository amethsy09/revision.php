<?php
// creer une fonction nommee calculatrice qui permet de faire ...
 function addition(int $a, int $b){
return $a +  $b ;
}
function soustraction(int $a, int $b){
    return $a -  $b ;
    } 
    function multiplication(int $a, int $b){
        return $a *  $b ;
        } 
        function division(int $a, int $b){
            $b !=0 ? $a/$b : 0;
            } 
function calculatrice(){

}
do {
    echo "\n===== MENU PRINCIPAL =====\n";
    echo "1. Addition\n";
    echo "2. Soustraction\n";
    echo "3. Multiplication\n";
    echo "4. Division\n";
    echo "4. Quitter\n";

    $a = readline("Entrez votre choix : ");

    switch ($a) {
        case 1:
            echo "\n--- Addition ---\n";
            
            break;

        case 2:
            echo "\n---Soustraction ---\n";
            
            break;

        case 3:
            echo "\n--- Multiplication ---\n";
            
            break;
            case 4:
                echo "\n--- Division ---\n";
                
                break;

        case 5:
            echo "\nFIN PROGRAMME.!\n";
            break;

        default:
            echo "\nChoix invalide, veuillez réessayer.\n";
            break;
    }
}
while ($a != 5) ;