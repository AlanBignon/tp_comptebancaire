<?php
    include 'transaction.php';
session_start();

//connection au serveur

    $bdd = new PDO('mysql:host=localhost;dbname=compte_bancaire;charset=utf8', 'root', '');

    //récupération des valeurs des champs:


    //compte :
    $compte = $_SESSION['id'];
    //label:
    $libelle = $_POST["libelle"] ;
    //montant:
    $montant = $_POST["montant"] ;

    $SELECT_COUNT = "SELECT MAX(id_transaction) FROM transaction";
    $result = $bdd->query($SELECT_COUNT);
    $nombreTransaction = $result->fetch();
    $nombreTransaction[0] = $nombreTransaction[0] +1;
    $transaction[] = new Transaction("$nombreTransaction[0]","$compte");
    var_dump($transaction);
    //création de la requête SQL:

    $bdd ->exec("INSERT  INTO transaction (libelle, montant, id_compte)VALUES ('$libelle', '$montant', '$compte') ") ;

        header('location: http://localhost/tp_comptebancaire/operations.php')
    ?>