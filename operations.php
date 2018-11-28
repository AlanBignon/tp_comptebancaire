<?php

?><!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
</head>
<body>
<header>
    <a href="index.php">Accueil</a>
</header>
<table align="center" class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>libellé</th>
        <th>montant</th>
    </tr>
    </thead>
    <?php
    //connection au serveur

    $bdd = new PDO('mysql:host=localhost;dbname=compte_bancaire;charset=utf8', 'root', '');

    //récupération des valeurs des champs:
    //label:
    $label     = $_POST["label"] ;
    //montant:
    $montant     = $_POST["montant"] ;

    //création de la requête SQL:
    $bdd ->exec( "INSERT  INTO test (label, montant)VALUES ( '$label', '$montant' ) ") ;

    echo "ajouté";

    ?>
</table>
</body>
</html>
