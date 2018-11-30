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
		<meta charset="utf-8"/>
		<title>Enregistrement</title>
	</head>
	<body>
		<h2>Enregistrement d'une opération</h2>

		<form name="insertion" action="add_operation_hide.php" method="POST">
    <tr align="center">
      <p>label :<br />  <input type="text" required name="libelle" /></p>
    </tr>
    <tr align="center">
      <p>montant :<br />  <input type="number" required name="montant" /></p>
    </tr>
    <tr align="center">
      <p><input type="submit" value="Enregister mon opération"></p>
    </tr>

	</form>
    </body>
</html>