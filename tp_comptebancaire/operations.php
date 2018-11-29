<?php
    
    $bdd = new PDO('mysql:host=localhost;dbname=compte_bancaire;charset=utf8', 'root', '');

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
                
                        <?php $stm = $bdd->query('SELECT * FROM transaction');
                        //Permet de parcourir les lignes une par une
                            while ($user = $stm->fetch()) { ?>
                                <tr>
                                    <td><?php echo ($user['id_transaction']); ?></td>
                                    <td><?php echo ($user['libelle']);?></td>
                                    <td><?php echo ($user['montant']);?></td>
                                    <td><?php echo ($user['id_compte']);?></td>
                                </tr>
                            <?php } ?>
                                
            
            </tbody>
        </table>
        <main>
        </main>
    </body>
</html>