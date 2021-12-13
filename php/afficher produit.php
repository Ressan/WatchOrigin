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
    <?php
    function Btn{
    $idf = mysqli_connect("127.0.0.1","root","","wo");
    $req = "select idProduit from produit ";
    $res = mysqli_query($idf,$req); 

    while($ligne = mysqli_fetch_assoc($res)){

        $id = $ligne["idProduit"];
        $_SESSION['id'] = $id;

    }
}
    ?>
    
</body>
</html>