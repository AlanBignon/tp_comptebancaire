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
        <link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8"/>
		<title>Enregistrement</title>
	</head>
	<body>
		<h1>Enregistrement d'une opération</h1>

		<form name="insertion" action="add_operation_hide.php" method="POST">
    <div align="center">
      <p>label :<br />  <input type="text" required name="libelle" /></p>
    </div>
    <div align="center">
      <p>montant :<br />  <input type="number" required name="montant" /></p>
    </div>
    <div align="center">
      <p>vers compte n°:<br /> <input type="number" name="id_compte_receveur" /></p>
    </div>
    <div align="center">
      <p><input type="submit" value="Enregister mon opération"></p>
    </div>
	</form>
    <div><button><a href="operations.php">Annuler</a></button></div>
    </body>
</html>