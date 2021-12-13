<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php" ?>
    <title>Page Admin | WO - Watch Origin</title>
    <link rel="stylesheet" type="text/css" href="../css/components/InterfaceAdmin.css">
    
</head>
<body>
    <?php include 'navbar.php'; ?>
    <center>
        <br><br>
    <h1>Page admin</h1>
    <br>
    <div class = 'Lien'>
        <form action="" method="post">
        <input type="submit" value="Validations membres" name='Valid' id='btn'>
        <input type="submit" value="Gestionnaire membres" name='Gest' id='btn'>
        
        </form>
        <?php
        if(isset($_POST['Valid'])){

            header('Location: ValidAdmin.php');
        }
        if(isset($_POST['Gest'])){

            header('Location: GestionnaireMembres.php');
        }
        ?>
    </div>
    </center>
    </div>

</body>
</html>