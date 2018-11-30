<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="style.css" type="text/css"/>
        <title></title>
        <meta charset="utf-8" />
    </head>
    <body>
			<?php

				try
				{
				// On se connecte à MySQL
					$bdd = new PDO('mysql:host=localhost;dbname=compte_bancaire;charset=utf8', 'root', '');
				}

				catch(Exception $e)
				{
				// En cas d'erreur, on affiche un message et on arrête tout
					die('Erreur : '.$e->getMessage());
				}

				// Si tout va bien, on peut continuer
				// On récupère tout le contenu de la table jeux_video

				

				$reponse = $bdd->query("SELECT * FROM `compte` ");

				// On affiche chaque entrée une à une

				while ($donnees = $reponse->fetch())
				{
			?> 
			<p>
				<?php echo $donnees['id_compte']; ?> <?php echo $donnees['nom_client']; ?> <?php echo $donnees['solde_compte']; ?><br />
			</p>

			<?php
				}

			$reponse->closeCursor(); // Termine le traitement de la requête
			?>

			<div>
        		<a href="virement.php"> <button>faire un virement</button></a>
      		</div>

			
    </body>
</html>