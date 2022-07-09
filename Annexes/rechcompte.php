<?php
$cherche=readline("                                                        Quel compte cherchez-vous?");
foreach ($comptes as $target){
    if ($target['numero_compte']==$cherche){
            echo "                                                          Les informations de ce compte sont: ".PHP_EOL.PHP_EOL;
            echo "                                                                  - Type " .$target['type'].PHP_EOL;
            echo "                                                                  - Solde " .$target['solde']. " euros ".PHP_EOL;
            break;
       
        }  else{
            echo "                                                          Compte inconnu".PHP_EOL;
        break;
        } 
    }
    
?>