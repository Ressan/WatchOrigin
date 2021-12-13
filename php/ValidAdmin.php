<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php' ?>
    <title>Document</title>
</head>
<body>

<h1> Validation admin</h1>

<?php
$Mail = $_SESSION['Mail'];
$idf = mysqli_connect("127.0.0.1","root","","wo");
$req = "select id, prenomUser, NomUser, Mail from utilisateur where Valider = '0'";
$res = mysqli_query($idf,$req);

while($ligne = mysqli_fetch_assoc($res)){

    $id = $ligne["id"];
    $nom="bouton".$id;
    $nom2="bouton2".$id;
    
        echo '
            <form action="" method ="post">';

                echo''.$ligne["prenomUser"].'&nbsp&nbsp&nbsp'.$ligne["NomUser"].'&nbsp&nbsp&nbsp'.$ligne["Mail"].'
                <input type="submit" value="Valider" name =',$nom,'>
                <input type="submit" value="Radier" name =',$nom2,'><br>';
                
                echo'<br>';
                if(isset($_POST[ $nom])){

                    $req2 = "UPDATE utilisateur  set Valider = '1' where id = '$id'";
                    $res2 = mysqli_query($idf,$req2);  
                    header("Refresh:0");
                    $_SESSION["$idUser" ] = $id; 
                }
                
                if(isset($_POST[$nom])){

                    $req2 = "DELETE FROM utilisateur WHERE id = '$id'";
                    $res2 = mysqli_query($idf,$req2);  
                    header("Refresh:0");
                        
                }

                ?>
            </form>
            <?php
}
?>

</body>
</html>




