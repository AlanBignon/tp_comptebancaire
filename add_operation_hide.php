<?php
    include 'transaction.php';
session_start();

//connection au serveur

    $bdd = new PDO('mysql:host=localhost;dbname=compte_bancaire;charset=utf8', 'root', '');

    //récupération des valeurs des champs:


    //compte envoyeur:
    $id_compte_envoyeur = $_SESSION['id'];
    //compte receveur :
    $id_compte_receveur = $_POST["id_compte_receveur"] ;
    //label:
    $libelle = $_POST["libelle"] ;
    //montant:
    $montant = $_POST["montant"] ;

    $SELECT_COUNT = "SELECT MAX(id_transaction) FROM transaction";
    $result = $bdd->query($SELECT_COUNT);
    $nombreTransaction = $result->fetch();
    $nombreTransaction[0] = $nombreTransaction[0] +1;
    $transaction[] = new Transaction("$nombreTransaction[0]","$id_compte_envoyeur");

    //création de la requête SQL:

    $bdd ->exec("INSERT  INTO transaction (libelle, montant, id_compte, id_compte_receveur)VALUES ('$libelle', '$montant', '$id_compte_envoyeur', '$id_compte_receveur') ") ;


    $reponse = $bdd->query("SELECT * FROM `comptes` WHERE id_compte = '$id_compte_envoyeur' ");
    var_dump($reponse);
    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch()) {

        $solde_new = $donnees['solde_compte'] - $montant;
        $bdd ->exec( "UPDATE comptes SET solde_compte = $solde_new WHERE id_compte = '$id_compte_envoyeur' ");
        $reponse->closeCursor();
    }


    $reponse = $bdd->query("SELECT * FROM `comptes` WHERE id_compte = '$id_compte_receveur' ");
    var_dump($reponse);
    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch()) {
        $solde_new = $donnees['solde_compte'] + $montant;
        $bdd ->exec( "UPDATE comptes SET solde_compte = $solde_new WHERE id_compte = '$id_compte_receveur' ");
        $reponse->closeCursor();
    }

    header('location: http://localhost/tp_comptebancaire/operations.php');
