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

        $montant     = $_POST["montant"] ; 
        $comptea = $_POST["comptea"] ;
        $compteb = $_POST["compteb"] ;


        $id1 = $comptea;
        $id2 = $compteb;

        ?>

        <?php

        $reponse = $bdd->query("SELECT * FROM `compte` WHERE id_compte = $id1 ");

        // On affiche chaque entrée une à une

        while ($donnees = $reponse->fetch())
        {
      ?> 
     

  

      <?php //$valeur1 = $solde_compte;

      $solde_new = $donnees['solde_compte'] - $montant; ?>




<?php
      $bdd ->exec( "UPDATE compte SET solde_compte = $solde_new WHERE id_compte = $id1 ");


      ?>

      <?php //echo "ajouté";?>


      <?php
        }

      $reponse->closeCursor(); // Termine le traitement de la requête
      ?>


       <?php

        $reponse = $bdd->query("SELECT * FROM `compte` WHERE id_compte = $id2 ");

        // On affiche chaque entrée une à une

        while ($donnees = $reponse->fetch())
        {
      ?> 

      <?php 

      $solde_new = $donnees['solde_compte'] + $montant; ?>



<?php
      $bdd ->exec( "UPDATE compte SET solde_compte = $solde_new WHERE id_compte = $id2 ");


      ?>

      <?php echo "du compte n° " . $id1 . " vers le compte n° " . $id2 . " virement  de " . $montant . " euros effectué";?>


      <?php
        }

      $reponse->closeCursor(); // Termine le traitement de la requête
      ?>
      
      <div>
        <a onclick="window.close();" href="etat_compte.php"> <button>exit</button></a>
      </div>
      
    </body>
</html>