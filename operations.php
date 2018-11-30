<?php
include 'function.php';
session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=compte_bancaire;charset=utf8', 'root', '');

if ($_SESSION['log'] == false) {
    redirection();
}
$id = $_SESSION['id'];

?><!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Opérations</title>
</head>
<body>
<header>
    <a href="index.php">Accueil</a>
    <a href="registre_transaction.php">ADD</a>
</header>
        <table align="center" class="table">
            <thead>
                <tr>
                    <th>libelle</th>
                    <th>montant envoyer</th>
                    <th>id compte receveur</th>
                </tr>
            </thead>
            <tbody>
                        <?php $stm = $bdd->query("SELECT * FROM transaction WHERE id_compte = '$id'");
                        //Permet de parcourir les lignes une par une
                            while ($user = $stm->fetch()) { ?>
                                <tr>
                                    <td><?php echo ($user['libelle']);?></td>
                                    <td><?php echo ($user['montant']);?></td>
                                    <td><?php echo ($user['id_compte_receveur']);?></td>
                                </tr>
                            <?php } ?>
            </tbody>
        </table>

        <table align="center" class="table">
            <thead>
            <tr>
                <th>libelle</th>
                <th>montant reçu</th>
                <th>id compte envoyeur</th>
            </tr>
            </thead>
            <tbody>
            <?php $stm = $bdd->query("SELECT * FROM transaction WHERE id_compte_receveur = '$id'");
            //Permet de parcourir les lignes une par une
            while ($user = $stm->fetch()) { ?>
                <tr>
                    <td><?php echo ($user['libelle']);?></td>
                    <td><?php echo ($user['montant']);?></td>
                    <td><?php echo ($user['id_compte']);?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>


<div>Solde : </div>
<?php $stm = $bdd->query("SELECT solde_compte FROM comptes WHERE id_compte = '$id'");?>
<?php while ($solde = $stm->fetch()) { ?>
<?php echo $solde['solde_compte']; ?>
<?php } ?>
        <main>
        </main>
    </body>
</html>