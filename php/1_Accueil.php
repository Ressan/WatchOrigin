<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1_accueil</title>
</head>
<body>
    <h1>Wo</h1>
    <li>
    <a href="2_Apropos"> A propos</a>&nbsp&nbsp&nbsp
    <a href="3_ServiceClient">Service client</a>&nbsp&nbsp&nbsp
    <a href="Produit.php">Produits</a>&nbsp&nbsp&nbsp
    <?php
    if(isset($_SESSION['Mail'])){
          
          ?>
          <a href="4_profil.php" name="Compte">Mon compte</a>&nbsp&nbsp&nbsp
          <?php
            
           


            $_POST['TypeUser'] = $_SESSION['TypeUser'];
            
            if($_POST['TypeUser']  == 1){

                echo'<a href="pageAdmin.php">interface Admin</a>';
            }
          
      ?>
      <?php
        }else{
            ?>
            <a href="connexion.php" name="Connexion">Identification</a>&nbsp&nbsp&nbsp
            <?php
        }

    ?>
    </li>

</body>
</html>