<?php
$bdd->exec("INSERT INTO transaction(#,libelle,montant,id_compte)VALUES(\'1\',\'test\',\'40\',\'1\')")

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
</table>
</body>
</html>
