<?php
$agences = [];
$clients = [];
$compte = [];
$comptes = [];



while (true) {
    echo ("                                           1/   Créer une agence\n");
    echo ("                                           2/   Créer un client\n");
    echo ("                                           3/   Créer un compte bancaire\n");
    echo ("                                           4/   Recherche de compte \n"); /* (numéros de compte)*/
    echo ("                                           5/   Recherche de client \n");/*(Nom, Numéros de compte, identifiant de client)*/
    echo ("                                           6/   Afficher la liste des comptes d'un client \n"); //(identifiant de client)
    echo ("                                           7/   Imprimer les infos client \n"); //(identifiant client)
    echo ("                                           Q/   Quitter le programme\n");

    $choix = readline("faite votre choix: ");

    if (($choix) == ("1")) {
        include "./Annexes/creationAgence.php";
    } else if (($choix) == ("2")) {
        include "./Annexes/creationClient.php";
    } else if (($choix) == ("3")) {
        include "./Annexes/Compte.php";
    } else if (($choix) == ("4")) {
        include "./Annexes/rechcompte.php";
    } else if (($choix) == ("5")) {
        include "./Annexes/rechclientf.php";
    } else if (($choix) == ("6")) {
        include "./Annexes/compteclient.php";
    } else if (($choix) == "7") {
        include "./Annexes/fichier.php";
    } else if (($choix) == "Q") {
        break;
    }
}
