<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("head.php") ?>
    <title>Connexion | WO - Watch Origin</title>
</head>
<body>
    
    <?php include("navbar.php");
    if(isset($_POST["ok"])){
        $id = mysqli_connect("'localhost':3306","root","root");
        $Mail = $_POST["mail"];
        $Mdp = $_POST["mdp"];
        $req = "select * from utilisateur where mail='$Mail' and Mdp='$Mdp'";
        $res = mysqli_query($id,$req);
        
       
        if(mysqli_num_rows($res)>0 )
        {
            $Mail = $_POST["mail"];
            
            $_SESSION['Mail'] = $Mail;
            $_SESSION['Mdp'] = $Mdp;

            if(mysqli_num_rows($res)>0){
                header('Location: 4_profil.php');
            }
           
        
        }else{
        $erreur =  "Erreur de mail ou mot de passe";
        }
    }
    ?>

    <form action="" method="post" class="Formulaire">
        <input type="text" name="mail" placeholder="e-mail" required><br><br>
        <input type="password" name="mdp" placeholder="Mot de passe" required><br><br>
        <?php if(isset($erreur)) echo "<h4>$erreur</h4>"; ?>
        <input type="submit" value="Connexion" id="btn2" name='ok' >
        <input type="submit"  value="Inscription" id="btn1" onclick="window.location.href = '6_Inscription.php';">
    </form>  
    <?php include("footbar.php") ?>
</body>
</html>