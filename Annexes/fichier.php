<?php
$cherche=readline("                               Quel id client cherchez-vous?   ");
foreach ($clients as $target){
    if ($target["id_client"]==$cherche) {
        $file=("------------------------------ FICHE CLIENT ------------------------------  ".PHP_EOL
            .PHP_EOL.
            " - Identifiant client : ".$target["id_client"].PHP_EOL.
            " - Nom : ".$target["nom"].PHP_EOL.
            " - Prénom : ".$target["prenom"].PHP_EOL.
            " - Date de naissance : ".$target["date_naissance"].PHP_EOL
            .PHP_EOL
            .PHP_EOL
            ."--------------------------------------------------------------------------"
            .PHP_EOL.
            " Liste de compte ".PHP_EOL.
            "--------------------------------------------------------------------------".PHP_EOL.
            " Numéro de compte                                      Solde : ".PHP_EOL.
            "--------------------------------------------------------------------------".PHP_EOL);
            foreach ($comptes as $key=>$valeur){
                if ($valeur["id_client"]==$cherche){
                $file=$file.($valeur["numero_compte"]."                                    ".$valeur["solde"].PHP_EOL);
                }  
            }
    }else{
        echo "Pas de données".PHP_EOL;
        break ;
    }                    
    file_put_contents("client.txt",$file);
    echo "Le fichier client.txt a bien été créé " .PHP_EOL;
}
           
        

    
 

?>