<?php 
session_start();
?>

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
    <input type="text" name="Nom" id="" placeholder="Entrer votre nom de famille"><br><br>
    <input type="text" name="Prenom" id placeholder="Entrer votre prenom"><br><br>
    <input type="mail" name="Mail" id="" placeholder="Entrer votre mail"><br><br>
    <input type="password" name="mdp" id="" placeholder="Entrer votre mot de passe"><br><br>
    <input type="text" name="ville" id="" placeholder=" Entrer le nom de votre ville "><br><br>
    <input type="text" name="Cp" id="" placeholder="Entrer le code postal"><br><br>
    <input type="text" name="rue" id="" placeholder="Entrer votre rue"><br><br><br><br>
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
        ?>
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