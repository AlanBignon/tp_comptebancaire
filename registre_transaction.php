<?php
?><!DOCTYPE html>
<html> 
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style.css" />
		<title>Enregistrement</title>
	</head>
	<body>
		<h2>Enregistrement d'une opération</h2>

		<form name="insertion" action="add_operation_hide.php" method="POST">

    <tr align="center">
      <p>label :<br />  <input type="text" name="libelle" /></p>
    </tr>
    <tr align="center">
      <p>montant :<br />  <input type="number" name="montant" /></p>
    </tr>
    <tr align="center">
      <p><input type="submit" value="Enregister mon opération"></p>
    </tr>

	</form>
    </body>
</html>