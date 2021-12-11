
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