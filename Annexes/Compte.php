<?php
$compte = [];

while (true) {
    if (readline("                                           Voulez-vous continuer? o: Oui, n: Non  ") != "o") {
        break;
    }


    $cherche = readline("                                  veuillez saisir l'identifiant client ");
    foreach ($clients as $client_en_cours) {
        if ($client_en_cours["id_client"] == $cherche) {
           $compte['nom']=$client_en_cours['nom'];
            $compte["id_client"] = $cherche;
            break;
        } else {
            echo ("                                          id_client non reconnu " . PHP_EOL);
            break 2;
        }
    }
    $cherche = readline("                                   Veuillez saisir le code agence  ");
    foreach ($agences as $agence_en_cours) {

        if ($agence_en_cours["code_agence"] == $cherche) {
            
            $compte["code_agence"] = $cherche;
            break;
        } else {
            echo ("                                         Agence non reconnue" . PHP_EOL);
            break 2;
        }
    }
    $type = readline("                                     Quel type de compte souhaitez-vous ouvrir?   ");

    foreach ($comptes as  $compte_en_cours) {
        if (($compte_en_cours["type"] == $type) and ($compte_en_cours["id_client"] === $compte["id_client"])) {
            echo ("                                        le client possède déjà ce type de compte" . PHP_EOL);
            break 2;
        }
    }
    $compte["type"] = $type;
    

    $compte["solde"] = readline("                           Quel est le montant du dépôt?  ");
    $compte["numero_compte"] = rand(11111111111, 99999999999);
    echo ("                                                 Le numéro de compte est le suivant: " . $compte["numero_compte"] . PHP_EOL);

    $comptes[] = $compte;
}
