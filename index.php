<?php
session_start();
include 'function.php';


if ($_SESSION['log'] == false) {
    var_dump($_SESSION['log']);
    redirection();
}

?><!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Mes opérations</title>
</head>
<body>
<header>
    <h1>Mon Compte trop super</h1>
</header>
<main>
    <a href="operations.php">Opérations</a>
    <a href="login.php">Déconnection</a>
</main>

</body>
</html>
