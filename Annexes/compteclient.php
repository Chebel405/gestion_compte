<?php


    $cherche=readline("                                     Quel numéro de client?");
    foreach ($comptes as $compte){
        if ($compte['nom'] == $cherche){
            
            var_dump($compte);
             echo "                                      Liste des comptes: ".PHP_EOL.PHP_EOL.PHP_EOL;
             echo "                                        Numéros de compte : " .$compte['numero_compte'].PHP_EOL.PHP_EOL;
             echo "                                               . Nom: " .$compte['nom'].PHP_EOL;
             echo "                                                 - ID client : " .$compte['id_client'].PHP_EOL;
             echo "                                                 - Solde : ".$compte['solde'].PHP_EOL;
             echo "                                                 - Type : " .$compte['type'].PHP_EOL;
        break;         
             
        

    }
}
    

       
?>