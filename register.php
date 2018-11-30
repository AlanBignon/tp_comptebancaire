<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=compte_bancaire;charset=utf8', 'root', '');

$go =0;

if (isset($_POST["nom_client"]))  {
    $go ++;
    $createCompteName = $_POST["nom_client"];
}
if (isset($_POST["password"])) {

    if ($_POST['password'] != $_POST['conf_password'])  {
        echo "les deux mots de pass sont différents";
        $go --;
    } else {
        $password = $_POST['password'];
        echo "Compte créer, veuillez vous connectez";
        $SELECT_COUNT = "SELECT MAX(id_compte) FROM comptes";
        $result = $bdd->query($SELECT_COUNT);
        $nombreTransaction = $result->fetch();
        $nombreTransaction[0] ++;
        echo "Votre id est : " . $nombreTransaction[0];
    }
}
if ($go ==1) {
    $bdd ->exec("INSERT  INTO comptes (nom_client, solde_compte, password )VALUES ('$createCompteName', '1000','$password') ") ;
}
?><!DOCTYPE html>
<html lang="fr">
<head>
    <title>Login</title>
</head>
<body>
<h1>Créer vous un compte!</h1>
<form method="POST">
    <input type="text" name="nom_client" required size="20" placeholder="nom_client" /> <br>
    <input type="password" name="password" required size="20" placeholder="Password"/> <br>
    <input type="password" name="conf_password" required size="20" placeholder="Confirmation du password"/> <br>
    <span class="validity"></span>
    <input type="submit" value="S'inscire" />
    <button><a href="login.php">Se connecter</a></button>
</form>
<!--  <a href="http://localhost/espace_membre/register.php"><button>Se créer un compte</button></a>-->
</body>
</html>