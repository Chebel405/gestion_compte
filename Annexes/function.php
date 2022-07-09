<?php
function validerChamps($messageOk, $pattern, $donnee,$messageErreur){
    $donnee=readline ($messageOk);//    $client['nom']     //"Saisissez le nom du client  "
                                //$messageOk
    if (!preg_match($pattern, $donnee )){         //"#^[a-z]*$#"       //$client['nom']
                                //$pattern                      
        while(!preg_match($pattern, $donnee )){//"#^[a-z]*$#"  //$client['nom']
                  
         $donnee = readline($messageErreur);//$client["nom"]      //"Veuillez saisir un nom valide : "
        }                                  //$messageErreur
    }
    return $donnee; //apporte le résultat final
}
                    // On remplace la partie écrite par les variables 
?>
<?php
    

   
    function saisirClient(&$compteurClient){ //
        $client =[];
        $alphabet = "AZERTYUIOPQSDFGHJKLMWXCVBN";
        //Validation des champs

    $client['nom'] = validerChamps("Saisssez le nom du client", "#^[A-Z{1}[a-z]*$#", $client['nom'],"Veuillez saisir un nom valide : ");
    $client['prenom'] = validerChamps("Saisssez le nom du client", "#^[A-Z{1}[a-z]*$#", $client['nom'],"Veuillez saisir un nom valide : ");

    $client["id_client"]=$alphabet[rand(0,strlen($alphabet))].$alphabet[rand(0,strlen($alphabet))] .$compteurClient;
    AZ1 //avec le 1er rand sa donne une lettre 'A' le 2e donne une lettre 'Z'
    // et le $compteurClient donne 1 seul chiffre et on en veut 6;
    
    $pattern = "#^(0?[1-9]|[1-2][0-9]|3[0-1])\/(0?[0-9]|1[0-2])\/(19[0-9]{2}|20[0-1]{1}[0-9]{1})$#";
    $client['date_naissance'] = validerChamps("Veuillez saisir la date de naissance : ",$pattern,$client['id_client'],"Veuillez saisir une date valide : ");

    $pattern = "#^[a-zA-Z0-9]+\.?[a-zA-Z0-9]+@[a-z0-9]+\.[a-z]{2,4}$#";
    $client['email'] = validerChamps( "Veuillez saisir l'adresse mail' ",$pattern, $client['email'],"Veuillez saisir une adresse mail valide : " );

    echo ("L'identifiant client est :" . $client['id_client'].PHP_EOL);
    $compteurClient++;
    }
    



?>
<?php
function saisirClient(){
    $client["id_client"]=$alphabet[rand(0,strlen($alphabet))].$alphabet[rand(0,strlen($alphabet))] .$compteurClient;
    AZ1 //avec le 1er rand sa donne une lettre 'A' le 2e donne une lettre 'Z'
    // et le $compteurClient donne 1 seul chiffre et on en veut 6
}

?>