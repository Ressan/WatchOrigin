
<!DOCTYPE html>
<html lang="en">
<head>

    <?php 
      include("head.php")
    ?>
    <title>Inscription | WO - Watch Origin</title>
</head>
<body>

    <?php 
      include("navbar.php")
    ?>

    <h1>Inscription</h1>
    <form action="" method='post'>
    <input type="text" name="Nom" id="" placeholder="Entrer votre nom de famille" required><br><br>
    <input type="text" name="Prenom" id placeholder="Entrer votre prenom" required><br><br>
    <input type="mail" name="mail" id="" placeholder="Entrer votre mail"required><br><br>
    <input type="password" name="mdp" id="" placeholder="Entrer votre mot de passe"required><br><br>
    <input type="text" name="ville" id="" placeholder=" Entrer le nom de votre ville "required><br><br>
    <input type="text" name="Cp" id="" placeholder="Entrer le code postal"required><br><br>
    <input type="text" name="rue" id="" placeholder="Entrer votre rue"required><br><br><br><br>
    <input type="submit" value="S'inscrire" name='ok'>   
    </form>
    


    <?php

    if(isset($_POST['ok'])){
        $id = mysqli_connect("127.0.0.1","root","","wo");
        $Mail = $_POST["Mail"];
        $req = "select Mail from utilisateur where Mail='".$Mail."'";
        $res = mysqli_query($id,$req);

        if ( mysqli_num_rows($res) > 0 ){
            echo "Mail deja pris";
        }else{
    
            
        
            $id = mysqli_connect("127.0.0.1","root","","wo");
            
            $Nom = $_POST["Nom"];
            $Prenom = $_POST["Prenom"];
            $Mail = $_POST["Mail"];
            $Mdp = $_POST["mdp"];
            $ville = $_POST["ville"];
            $Cp = $_POST["Cp"];
            $rue = $_POST["rue"];
    
       
            $req = "insert into utilisateur values ('$Mail','$Mdp','$Prenom','$Nom','$ville','$Cp','$rue')";
            $res = mysqli_query($id,$req);


            $_SESSION['Mail'] = $Mail;
            $_SESSION['mdp'] = $Mdp;
            $_SESSION['Prenom'] = $Prenom;
            $_SESSION['Nom'] = $Nom ;
            
            $_SESSION['ville'] = $ville;
            $_SESSION['Cp'] = $Cp;
            $_SESSION['rue'] = $rue;
            
            
            
        }
        header('Location: 4_profil.php');
    }
            include "footbar.php";
         ?>
</body>
</html>