<?php
session_start();


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
    
    <?php
    if(isset($_POST["ok"])){
        $id = mysqli_connect("127.0.0.1","root","","wo");
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
    <input type="submit"  value="Inscription" id="btn1" onclick="window.location.href = 'Inscription.php';">
    </form>    
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Shop</h3>
                        <ul>
                            <li><a href="#">WO for men</a></li>
                            <li><a href="#">WO for women</a></li>
                            <li><a href="#">WO customs</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About Us</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Watchs Originals</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Copyright Watchs Originals  . Tous droits réservés. 2021</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>