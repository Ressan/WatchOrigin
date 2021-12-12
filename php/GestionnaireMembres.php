<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gestionnaire des menbre</h1>

    <?php
    $idf = mysqli_connect("127.0.0.1","root","","wo");
    $req = "select * from utilisateur ";
    $res = mysqli_query($idf,$req);

    while($ligne = mysqli_fetch_assoc($res)){
        
        $id = $ligne["id"];
        $nom="bouton".$id;
        
        echo "<tr>
            <td>".$ligne["id"]."</td>
            <td>".$ligne["prenomUser"]."</td>
            <td>".$ligne["NomUser"]."</td>
            <td>".$ligne["Mail"]."</td>
            <td>".$ligne["adresseUser"]."</td>
            <td>".$ligne["CpVille"]."</td>
            <td>".$ligne["rue"]."</td>
        </tr>";
        echo $id;

        
        echo'
        <form action="" method ="post">
        <input type="submit" value="Supprimer" name=',$nom,'>
        
        </form>';
        if(isset($_POST[$nom])){


            
            $req2 = "DELETE FROM utilisateur WHERE id = '$id'";
            $res2 = mysqli_query($idf,$req2);  
            header("Refresh:0");
                
        }
        echo'<br>';
        
            
}
            ?>
</body>
</html>