<?php

while (true){
    if (readline ("                                        Voulez-vous continuer? o: Oui, n: Non  ")!="o"){
    break;
    }
$cherche=readline("                                        Entrée le nom recherché, le compte ou l'identifiant  ");

            
    foreach ($comptes as $target){
        if ($target['numero_compte']==$cherche){
             echo "                                        Les informations de ce compte sont: ".PHP_EOL.PHP_EOL.PHP_EOL;
             echo "                                        Numéros de compte : " .$target['numero_compte'].PHP_EOL.PHP_EOL;
             echo "                                                 - ID client : " .$target['id_client'].PHP_EOL;
             echo "                                                 - Solde : ".$target['solde'].PHP_EOL;
             echo "                                                 - Type : " .$target['type'].PHP_EOL;
        break 2;         
        }  
    }
    foreach($clients as $target){
        if($target['nom']==$cherche){
            foreach($comptes as $compte){
                if ($compte['id_client']==$target['id_client']){
                    echo "                                        Les informations de ce compte sont ".PHP_EOL;
                    echo "                                           . Nom: " .$target['nom'].PHP_EOL;
                    echo "                                                  - ID client: ".$target['id_client'].PHP_EOL;
                    echo "                                                  - Numéros de compte: " .$compte['numero_compte'].PHP_EOL;
                    echo "                                                  - Type: " .$compte['type'].PHP_EOL;

                }break 2;
            }
           
        }
    }
    foreach($clients as $target){
        if($target['id_client']==$cherche){
            echo "                                         Les informations de ce compte sont ".PHP_EOL;
            echo "                                              .    ID client: ".$target['id_client'].PHP_EOL;
            echo "                                                   - Nom: " .$target['nom'].PHP_EOL;
            echo "                                                   - Numéros de compte: " .$compte['numero_compte'].PHP_EOL;
            echo "                                                   - Type : " .$compte['type'].PHP_EOL;
        break 2;
        }
    }
}
?>
