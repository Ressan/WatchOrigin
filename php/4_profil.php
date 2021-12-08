
<?php
session_start();

    

$Mail = $_SESSION['Mail'];






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="1_Accueil.php">Accueil</a> <br><br>

    <h1>Votre profil</h1>
    <?php


        
       
    

        $id = mysqli_connect("127.0.0.1","root","","wo");
        $req = "select * from utilisateur where Mail='".$Mail."'";
        $res = mysqli_query($id,$req);

        
        while($ligne = mysqli_fetch_assoc($res)){
        echo "<div  id='carre'> 
          <tr> 
                    " ;
                    
                    if($ligne['TypeUser'] == 1){
                        echo" Vous etes en session admin <br><br>";
                    }
                   echo "
                    Votre prénom : <td>".$ligne['prenomUser']."</td> <br></br>
                    Votre nom <td>".$ligne["NomUser"]."</td><br></br>
                    votre adresse mail <td>".$ligne["Mail"]."</td><br></br>
                    Votre adresse <td>".$ligne["rue"]."</td>&nbsp<td>".$ligne["adresseUser"]."</td>&nbsp<td>".$ligne["CpVille"]."</td><br></br>
                 
                    
                    
             </tr></div>";
        }
    ?>

<div  id="btn">
    <form action="" method='post'>
    <input type="submit" value="Deconnexion" name="Deconnexion"style="width:150px; height: 50px; font-size: 23px">    
    </div>
    <?php

    if(isset($_POST['Deconnexion'])){

        session_destroy();
        header('Location: 1_accueil.php');
            
    }


    ?>

</body>
</html>