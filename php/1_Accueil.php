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
    <a href="2_Apropos"> A propos</a>
    <a href="3_ServiceClient">Service client</a>
    <?php
    if(isset($_SESSION['Mail'])){
          
          ?>
          <a href="4_profil.php" name="Compte">Mon compte</a>

          
      
      <?php
        }else{
            ?>
            <a href="connexion.php" name="Connexion">Connexion</a>
            <?php
        }

    ?>
    </li>
</body>
</html>