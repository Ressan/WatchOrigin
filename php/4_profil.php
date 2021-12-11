
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


        

       
    

        $idf = mysqli_connect("127.0.0.1","root","","wo");
        $req = "select prenomUser, NomUser, Mail, rue, adresseUser, CpVille, TypeUser from utilisateur where Mail='".$Mail."'";
        $res = mysqli_query($idf,$req);

        
        while($ligne = mysqli_fetch_assoc($res)){
        echo "<div  id='carre'> 
          <tr> 
                    " ;
                    
                    if($ligne['TypeUser'] == 1){
                        echo" Vous etes en session admin <br><br>";
                    }
                   echo "
                    Votre prénom :&nbsp&nbsp <td>".$ligne['prenomUser']."</td> <br></br>
                    Votre nom:&nbsp&nbsp <td>".$ligne["NomUser"]."</td><br></br>
                    votre adresse mail:&nbsp&nbsp <td>".$ligne["Mail"]."</td><br></br>
                    Votre adresse: &nbsp&nbsp <td>".$ligne["rue"]."</td>&nbsp<td>".$ligne["adresseUser"]."</td>&nbsp<td>".$ligne["CpVille"]."</td><br></br>
                 
                    
                    
            </tr></div>";
            $_SESSION['TypeUser'] = $ligne['TypeUser'];
            
        }
        
       
    ?>


       

    <form action="" method='post'>
        
    <input type="submit" value="Deconnexion" name="Deconnexion"style="width:150px; height: 50px; font-size: 23px">    
    <input type="submit" value="Modifier" name="Modifier"style="width:150px; height: 50px; font-size: 23px"> <br><br>
    </form>
    
    <?php 

    if(isset($_POST['Deconnexion'])){

        session_destroy();
        header('Location: 1_accueil.php');
            
    }

    if(isset($_POST['Modifier'])){
        ?>
        <form action="" method='post'>
        <input type="submit" value="Modifier prenom" name="modifprenom">
        <input type="submit" value="Modifier nom" name="modifnom">
        <input type="submit" value="Modifier adresse" name="modifAdd">
        </form>
        <?php      
    }

    //modif prenom
    if(isset($_POST['modifprenom'])){
        ?>
        <form action="" method='post'>
        <input type="text" name="Validerprenomt" placeholder="Modifier prenom" required>
        <input type="submit" value="Valider" name='Validerprenom' >
        </form>
        <?php
    }
    
    if(isset($_POST['Validerprenom'])){
        $Validerprenomt = $_POST['Validerprenomt'];
        $idf = mysqli_connect("127.0.0.1","root","","wo");
        $req2 = "UPDATE utilisateur  set prenomUser = '$Validerprenomt' where Mail = '$Mail'";
        $res2 = mysqli_query($idf,$req2);
        header("Refresh:0");
    }
    //Modif Nom
    if(isset($_POST['modifnom'])){
        ?>
        <form action="" method='post'>
        <input type="text" name="Validernomt" placeholder="Modifier nom" required>
        <input type="submit" value="Valider" name='Validernom' >
        </form>
        <?php
    }
    
    if(isset($_POST['Validernom'])){
        $Validernomt = $_POST['Validernomt'];
        $idf = mysqli_connect("127.0.0.1","root","","wo");
        $req2 = "UPDATE utilisateur  set NomUser = '$Validernomt' where Mail = '$Mail'";
        $res2 = mysqli_query($idf,$req2);
        header("Refresh:0");
    }

    if(isset($_POST['modifAdd'])){
        ?>
        <form action="" method='post'>
        <input type="text" name="Ruet" placeholder="Modifier rue" required>
        <input type="submit" value="Valider" name='ValiderRue' >
        </form>
        <form action="" method='post'>
        <input type="text" name="Villet" placeholder="Modifier Ville" required>
        <input type="submit" value="Valider" name='ValiderVille' >
        </form>
        <form action="" method='post'>
        <input type="text" name="Cpt" placeholder="Modifier Code postal" required>
        <input type="submit" value="Valider" name='ValiderCp' >
        </form>
        <?php
    }

    if(isset($_POST['ValiderRue'])){
        $ValiderRue = $_POST['Ruet'];
        $idf = mysqli_connect("127.0.0.1","root","","wo");
        $req2 = "UPDATE utilisateur  set rue = '$ValiderRue' where Mail = '$Mail'";
        $res2 = mysqli_query($idf,$req2);
        header("Refresh:0");
    }

    if(isset($_POST['ValiderVille'])){
        $ValiderVille = $_POST['Villet'];
        $idf = mysqli_connect("127.0.0.1","root","","wo");
        $req2 = "UPDATE utilisateur  set adresseUser = '$ValiderVille' where Mail = '$Mail'";
        $res2 = mysqli_query($idf,$req2);
        header("Refresh:0");
    }

    if(isset($_POST['ValiderCp'])){
        $ValiderCp = $_POST['Cpt'];
        $idf = mysqli_connect("127.0.0.1","root","","wo");
        $req2 = "UPDATE utilisateur  set CpVille = '$ValiderCp' where Mail = '$Mail'";
        $res2 = mysqli_query($idf,$req2);
        header("Refresh:0");
    }

    ?>
    

</body>
</html>