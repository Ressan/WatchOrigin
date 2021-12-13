<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include "head.php";
     ?>
    <title>Document</title>
</head>
<body>
    <?php
    include "navbar.php";

    $dsn = 'mysql:dbname=wo;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $options= array(PDO::MYSQL_ATTR_INIT_COMMAND =>"set NAMES utf8");

    try {
        $pdo = new PDO($dsn, $user, $password, $options);
    } catch (PDOException $e) {
        echo 'Connexion échoué' .$e->getMessage();
    }
    $req = 'select * from produit';
    $stmt = $pdo->prepare($req);
    $stmt -> execute();
    $produit = $stmt-> fetchAll(PDO::FETCH_ASSOC);
    
?>




    <div class="row no-gutte" style="margin: 100px">
        <?php 
        foreach($produit as $c) : ?>
        <div class="col-3">
            
            <div class="card" style="width: 15rem; height: 30rem; margin-top: 30px; ">
            <img src=" ../images/<?= $c['image'] ?>" class="card-img-top">
                <div class="card-body">
                <?php    
                $idProd = $c['idProduit'] ;
                $nom = "bouton".$c['idProduit'] ;
                
                
                    ?>
                    <h3 class="card-title"><?= $c['libelle'] ?></h3>
                    <p class="card-text"><?= $c['description'] ?></p>
                    <h3 class="card-texte"><?= $c['Prix'] ?>€</h3>

                    <?php
                    echo'
                    <form action="" method="post">
                        <input type="submit" value="Ajouter" name=',$nom,'><br><br><br>
                    ';
                    ?>
                    </form>
                    
                    <?php 
                    if(isset($_POST[$nom])){
                        
                        
                        $req2 = "UPDATE produit  set Etat = '1' where idProduit = '$idProd'";
                        $stmt2 = $pdo->prepare($req2);
                        $stmt2 -> execute();

                        $req3 = "UPDATE produit  set Total = Total + 1 where idProduit = '$idProd'";
                        $stmt3 = $pdo->prepare($req3);
                        $stmt3 -> execute();
                        ?>
                        <h3 class="title"><?php',$c['Total'],'?><h3>
                        <?php
                      
                    } 

                    
                    

                    

                   
                    
    ?>
                </div>
            </div>   
        </div>
    


    <?php endforeach ;?>

    </div>
        
       

      
        <?php 
        include("footbar.php"); 
        ?>


    <?php 
    include "footbar.php";
     ?>

</body>
</html>