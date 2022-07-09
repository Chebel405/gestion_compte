<?php 
$alphabet = "AZERTYUIOPQSDFGHJKLMWXCVBN";
$cpt=1;



while (true) {
    if (readline ("                                                Voulez-vous continuer? o: Oui, n: Non  ")!="o"){
    break;
    }

  
$client=[];
$client["nom"]=readline ("                                         Saisissez le nom du client  ");
if (!preg_match("#^[a-z]*$#", $client['nom'])){                          //$param1
    while(!preg_match("#^[a-z]*$#", $client['nom'])){
                       //param3          // $parm2
        $client["nom"] = readline("                                Veuillez saisir un nom valide : ");
    }                                                                   //param4
}
$client["prenom"]=readline ("                                      Saisissez le prénom du client  ");
if (!preg_match("#^[a-z]*$#", $client['prenom'])){//Débute par une majuscule suivi de minuscules
    while(!preg_match("#^[a-z]*$#", $client['prenom'])){
        $client["prenom"] = readline("                             Veuillez saisir un prénom valide : ");
    }
}
$client["id_client"]=$alphabet[rand(0,strlen($alphabet))].$alphabet[rand(0,strlen($alphabet))].str_pad(strval($cpt),6,"0",STR_PAD_LEFT);
$cpt++;
$client["date_naissance"]= readline ("                             Veuillez saisir la date de naissance ");
if (!preg_match("#^(0?[1-9]|[1-2][0-9]|3[0-1])\/(0?[0-9]|1[0-2])\/(19[0-9]{2}|20[0-1]{1}[0-9]{1})$#", $client['date_naissance'])){
    while(!preg_match("#^(0?[1-9]|[1-2][0-9]|3[0-1])\/(0?[0-9]|1[0-2])\/(19[0-9]{2}|20[0-1]{1}[0-9]{1})$#", $client['date_naissance'])){
        $client["date_naissance"] = readline("                      Veuillez saisir une date valide : ");
    }
}
$client["email"]= readline ("                                       Veuillez saisir l'adresse mail' ");
if (!preg_match("#^[a-zA-Z0-9]+\.?[a-zA-Z0-9]+@[a-z0-9]+\.[a-z]{2,4}$#", $client['email'])){
    while(!preg_match("#^[a-zA-Z0-9]+\.?[a-zA-Z0-9]+@[a-z0-9]+\.[a-z]{2,4}$#", $client['email'])){
        $client["email"] = readline("                               Veuillez saisir une adresse mail valide : ");
    }
}
echo ("                                                             L'identifiant client est: ".$client['id_client'].PHP_EOL);

$clients[]=$client;

break;
}


?>