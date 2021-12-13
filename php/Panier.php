


<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include("head.php")
    ?>
    <title>Document</title>
</head>
<body>

<?php 
    include("navbar.php");
    
    echo'<h1>Mon panier</h1>';

    $dsn = 'mysql:dbname=wo;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $options= array(PDO::MYSQL_ATTR_INIT_COMMAND =>"set NAMES utf8");

    try {
        $pdo = new PDO($dsn, $user, $password, $options);
    } catch (PDOException $e) {
        echo 'Connexion échoué' .$e->getMessage();
    }
    $req = 'select * from produit where Etat = "1"';
    $stmt = $pdo->prepare($req);
    $stmt -> execute();
    $produit = $stmt-> fetchAll(PDO::FETCH_ASSOC);
    $MaxiTot = 0;
?>


    <div class="row no-gutte" style="margin: 20px">
        <?php 
        foreach($produit as $c) : ?>
        <div class="col-4">
            <div class="card" style="width: 15rem; height: 30rem;">
            <img src=" <?= $c['image'] ?>" class="card-img-top">
            <div class="card-body">
            <?php    
            $idProd = $c['idProduit'] ;
            $nom = "bouton".$c['idProduit'] ;
            $nom2 = "bouton2".$c['idProduit'] ;
            $nom3 = "bouton3".$c['idProduit'] ;
            
            
                ?>
                <h5 class="card-title"><?= $c['libelle'] ?></h5>
                
                <h3 class="card-title"><?= $c['Prix'] ?>€</h3>
            
                <?php
                echo'
                <form action="" method="post">
                    <input type="submit" value="Ajouter" name=',$nom,'>
                    <input type="submit" value="Supprimer" name=',$nom2,'><br><br><br>
                ';
                
                ?>
                </form>
                
                <?php 
                
                if(isset($_POST[$nom])){
                
                    $total2 = 1;

                    $req3 = "UPDATE produit  set Total = Total + '1' where idProduit = '$idProd'";
                    $stmt3 = $pdo->prepare($req3);
                    $stmt3 -> execute();
                    
                    
                    
                
                    

                }else if(isset($_POST[$nom2])){
                
                    
                    $total3 = -1; 

                    $req3 = "UPDATE produit  set Total = '0' , Etat = '0' where idProduit = '$idProd'";
                    $stmt3 = $pdo->prepare($req3);
                    $stmt3 -> execute();
                    $c['Total'];
                    
                    


                }
                
                $ouiii = $c['Total'];
                echo $ouiii;
                echo '<br>';
                $totalp = $c['Total'] * $c['Prix'] ;
                echo $totalp, '€';
                
                $MaxiTot = $MaxiTot + $totalp;
                ?>
                </div>
            </div>   
        </div>
            <?php
        endforeach ;
?>

            
        
    </div>
    <br><br><br><br><br>
    <form action="" method="post">
    <input type="submit" value="Commander" name="Valider">
    </form>
    <?php
    echo $MaxiTot, '€';
    if(isset($_POST['valider'])){#button de validation de la commande dans le panier
        $id = mysqli_connect("127.0.0.1","root","","wo");
        $_POST["mail"] = $_SESSION['Mail'];
        $Mail = $_POST["mail"];
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"WatchsOriginals"<watchsoriginals@gmail.com>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';

        $message='
        <html>
            <body>
                <div align="center">
                    <img src="../logo-wo.png"/>
                    <br />
                    <img src="http://www.primfx.com/mailing/separation.png"/>
                    <br />
                    Bonjour,
                    Merci pour votre confiance.
                    Nous vous confirmons la validation de votre commande ce jour.
                    Cordialement
                    Watchs Originals
                    <br />
                    <img src="../logo-wo.png"/>
                </div>
            </body>
        </html>
        ';

        mail("$Mail", "Confirmation de commande", $message, $header);
        }
        ?>
        <form method="POST" action="">
            <input type="submit" value="Valider ma commande" name="valider"/>
        </form>
            

    
</body>
</html>