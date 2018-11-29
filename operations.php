<?php
    
    $bdd = new PDO('mysql:host=localhost;dbname=compte_bancaire;charset=utf8', 'root', '');
     
    // Récupération des données
    $requete = $bdd->query('SELECT DISTINCT id_transaction, libelle, montant, id_compte FROM transaction;');
    $lignes = $requete->fetchAll();
    var_dump($lignes);

    $requete->closeCursor();


?><!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
</head>
<body>
<header>
    <a href="index.php">Accueil</a>
    <a href="registre_transaction.php">ADD</a>
</header>
        <table align="center" class="table">
            <thead>
                <tr>
                    <td>id_transaction</td>
                    <td>libelle</td>
                    <td>montant</td>
                    <td>id_compte</td>
                </tr>
            </thead>
            <tbody>
                <?php // Boucle sur les enregistrements ?>
                <?php foreach($lignes as $ligne) : ?>
                    <tr>
                        <?php // Boucle sur les colonnes ?>
                        <?php foreach($ligne as $valeur) : ?>
                            <td><?php echo $valeur; ?></td>
                        <?php endforeach ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <main>
        </main>
    </body>
</html>
