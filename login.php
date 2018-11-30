<?php
session_start();
include 'function.php';
$bdd = new PDO('mysql:host=localhost;dbname=compte_bancaire;charset=utf8', 'root', '');
$_SESSION['log']= false;
if (isset($_POST['id_compte'])) {
    if (isset($_POST['password'])) {
        $comptes = $_POST['id_compte'];
        $password = $_POST['password'];
    }
}
$check = false;

if (isset($comptes) AND (isset($password))) {
    $sql = "SELECT * FROM comptes WHERE id_compte = '$comptes' AND password = '$password'";
    $result = $bdd->query($sql);
    $check = $result->fetchObject();
    var_dump($check);
}
if (isset($comptes) AND (isset($password))) {
    if ($check != FALSE) {
        $_SESSION['log'] = true;
        $_SESSION['id'] = $comptes;
        redirectionIndex();
    } else
        echo "les informations que vous avez rentrez ne sont pas correct";
}

?><!DOCTYPE html>
<html lang="fr">
<head>
    <title>Login</title>
</head>
<body>
<h1>Connectez vous!</h1>
<form method="POST">
    <input type="text" name="id_compte" required size="20" placeholder="id_compte" /> <br>
    <input type="password" name="password" required size="20" placeholder="password"/> <br>
    <span class="validity"></span>
    <input type="submit" value="Se connecter"/>
</form>
<!--  <a href="http://localhost/espace_membre/register.php"><button>Se créer un compte</button></a>-->
</body>
</html>