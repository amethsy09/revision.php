<?php
$etudiants=[
["nom"=>"sy","prenom"=>"mouhamed","classe"=>"L2DEV","telephone"=>"773632963"],
["nom"=>"Mbodj","prenom"=>"Malick","classe"=>"L2DEV","telephone"=>"781556521"],
["nom"=>"Thiam","prenom"=>"Seydina Ben","classe"=>"L2GEL","telephone"=>"766302832"],
["nom"=>"Thiam","prenom"=>"Ibrahima","classe"=>"L2GEL","telephone"=>"763104000"],
["nom"=>"Niang","prenom"=>"Fatima","classe"=>"L2DEV","telephone"=>"767298266"],
["nom"=>"Niass","prenom"=>"Fati Rocky","classe"=>"L2DEV","telephone"=>"773942571"],
];
// filtrer dans le tableau tout les etudiants dont le nom ou le prenom contient la lettre o 
// $trouvemoi = 'o';
// foreach ($etudiants as $etudiant) {
//     $recup= strpos($etudiant['prenom'] , $trouvemoi);
//     if ($recup !== false) {
//         foreach ($etudiant as $key => $value) {
//             echo "$key : $value \n";
//         }
//         echo"\n---------------\n";
// }
    
// }
function ajouterEtudiant(&$tab) {
    $nom = readline("Saisir le nom de l'étudiant : ");
    $prenom = readline("Saisir le prénom de l'étudiant : ");
    $classe = readline("Saisir la classe de l'étudiant : ");
    $telephone = readline("Saisir le téléphone de l'étudiant : ");

    $nouvelEtudiant = [
        "nom" => $nom,
        "prenom" => $prenom,
        "classe" => $classe,
        "telephone" => $telephone
    ];

    $tab[] = $nouvelEtudiant;
    echo "Étudiant ajouté avec succès.\n";
}

// Appel de la fonction pour ajouter un étudiant
ajouterEtudiant($etudiants);

// Afficher la liste des étudiants après ajout
foreach ($etudiants as $etudiant) {
    echo "NOM: " . $etudiant['nom'] . ", PRENOM: " . $etudiant['prenom'] . ", CLASSE: " . $etudiant['classe'] . ", TELEPHONE: " . $etudiant['telephone'] . "\n";
    echo "\n -----------------------------------------\n";
}

 

?>