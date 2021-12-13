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



    <?php 
    foreach($produit as $c) : ?>
    <div class="card" style="width: 18rem;">
    <img src=" <?= $c['image'] ?>" class="card-img-top">
        <div class="card-body">
        <?php    
        $idProd = $c['idProduit'] ;
        $nom = "bouton".$c['idProduit'] ;
        
        
            ?>
            <h5 class="card-title"><?= $c['libelle'] ?></h5>
            <p class="card-text"><?= $c['description'] ?></p>
            <h3 class="card-title"><?= $c['Prix'] ?>€</h3>

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
                echo $c['Total'];
                
               

            }

?>

            
        </div>
    </div>


    <?php endforeach ;

    
        
        /*$id = mysqli_connect("127.0.0.1","root","","wo");
        $req = "select * from produit";
        $res = mysqli_query($id,$req);
        
        
        while($ligne = mysqli_fetch_assoc($res)){
            $idf = $["idProduit"];
        }

        if(isset($_POST["Ajouter"])){

            echo 'ouai';
            $req2 = "UPDATE produit  set Etat = '1' where idProduit = '$idf'";
            $res2 = mysqli_query($id,$req);
            echo $idf;
        }*/


    ?>


    <?php 
    include "footbar.php";
     ?>

</body>
</html>