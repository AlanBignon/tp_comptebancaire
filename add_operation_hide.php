<?php

    //connection au serveur

    $bdd = new PDO('mysql:host=localhost;dbname=compte_bancaire;charset=utf8', 'root', '');

    //récupération des valeurs des champs:

    //label:
    $libelle     = $_POST["libelle"] ;
    //montant:
    $montant     = $_POST["montant"] ;


    //création de la requête SQL:

    //recuperation du nombre de transaction deja présente
    //$SELECT_COUNT = "SELECT COUNT(*) FROM transaction";
    //$result = $bdd->query($SELECT_COUNT);
    //$count = $result->fetch();
    //creation de la nouvelle ligne
    $bdd ->exec("INSERT  INTO transaction (libelle, montant)VALUES ('$libelle', '$montant') ") ;
    

    header('location: http://localhost/tp_phpobjet/operations.php')

    ?>