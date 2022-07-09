<?php
$cpt2=1;

while(true){
    if (strtolower(readline("                                       Voulez vous continuer? o: Oui, n : Non  "))!="o"){
        break;
    }
    $agence=[];
    $agence['code_agence'] = str_pad(strval($cpt2),3,"0",STR_PAD_LEFT);
    $cpt2++;
    $agence['nom_agence']= readline("                                        Veuillez saisir le nom de l'agence : ").PHP_EOL.PHP_EOL;
    foreach ($agences as $agence_en_cours){       
        if ($agence_en_cours['nom_agence']==$agence['nom_agence']){
            echo "                                                               La banque existe déjà ".PHP_EOL.PHP_EOL;
        break 2;
        }
    }
    $agence['adresse_agence']= readline("                                        Veuillez saisir l'adresse : ").PHP_EOL.PHP_EOL;
    $agences[] = $agence;
    echo "                                                              Le code agence est: ".$agence['code_agence'].PHP_EOL;
    break;

}
?>