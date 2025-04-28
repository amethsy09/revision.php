<?php
$etudiants=[
["nom"=>"sy","prenom"=>"mouhamed","classe"=>"L2DEV","telephone"=>"773632963"],
["nom"=>"Mbodj","prenom"=>"Malick","classe"=>"L2DEV","telephone"=>"781556521"],
["nom"=>"Thiam","prenom"=>"Seydina Ben","classe"=>"L2GEL","telephone"=>"766302832"],
["nom"=>"Thiam","prenom"=>"Ibrahima","classe"=>"L2GEL","telephone"=>"763104000"],
["nom"=>"Niang","prenom"=>"Fatima","classe"=>"L2DEV","telephone"=>"767298266"],
["nom"=>"Niass","prenom"=>"Fati Rocky","classe"=>"L2DEV","telephone"=>"773942571"],
["nom"=>"Niass","prenom"=>"Omar","classe"=>"L2DEV","telephone"=>"773942571"],
];
// pour lister les etudiants 
foreach ($etudiants as $etudiant) {
    echo " \n NOM: " .$etudiant['nom']." ,PRENOM: " .$etudiant['prenom']." ,CLASSE: ".$etudiant['classe']. " ,telephone: ".$etudiant['telephone'];
    echo"\n";
};
// pour rechercher un etudiant via son numero de telephone
function recherche($tab,$tel){
foreach ($tab as $etudiant) {
    if ($etudiant['telephone'] == $tel) {
        return $etudiant;
    }
    }
}
$recherche= readline("saisir le numero sde telephone a rechercher :");
$recup= recherche($etudiants,$recherche);
// POUR L'AFFICHER
if ($recup) {
    foreach ($recup as $key => $value) {
        echo "$key : $value \n";
    }
}else {
   echo "aucun n'étudiant trouvé ";
}
// filtrer dans le tableau tout les etudiants dont le nom ou le prenom contient la lettre o 
$trouvemoi = 'o';
foreach ($etudiants as $etudiant) {
    $recup= strpos(strtolower($etudiant['prenom']) , $trouvemoi);
    if ($recup !== false) {
        foreach ($etudiant as $key => $value) {
            echo "$key : $value \n";
        }
        echo"\n---------------\n";
}
    
}


?>