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

<h1> Validation admin</h1>


<?php
 
$idf = mysqli_connect("127.0.0.1","root","","wo");
$req = "select id, prenomUser, NomUser, Mail from utilisateur where Valider = '0'";
$res = mysqli_query($idf,$req);

while($ligne = mysqli_fetch_assoc($res)){
   
   
    $id = $ligne["id"];
    $nom="bouton".$id;
    $nom2="bouton".$id;
    
    
    
        echo '
            <form action="" method ="post">';


                
                
                
                echo''.$ligne["prenomUser"].'&nbsp&nbsp&nbsp'.$ligne["NomUser"].'&nbsp&nbsp&nbsp'.$ligne["Mail"].'
                    

              
                <input type="submit" value="Valider" name =',$nom,'>
                <input type="submit" value="Radier" name =',$nom,'><br>';
                
                echo'<br>';
                if(isset($_POST[ $nom])){

                    $req2 = "UPDATE utilisateur  set Valider = '1' where id = '$id'";
                    $res2 = mysqli_query($idf,$req2);  
                    header("Refresh:0");
                        
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




