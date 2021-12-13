<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="contacte.css">
    <?php 
        include("head.php")
    ?>
    <title>Nous Contacter | WO - Watch Origin</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="container">
        <form action="action_page.php">
      
          <label for="fname">Prénom</label>
          <input type="text" id="fname" name="firstname" placeholder="Votre prénom..">
      
          <label for="lname">Nom</label>
          <input type="text" id="lname" name="lastname" placeholder="Votre nom..">

          <label for="Email">Email</label>
          <input type="text" id="emai" name="email" placeholder="Votre Email    ">
      
      
          <label for="subject">Sujet</label>
          <textarea id="subject" name="subject" placeholder="Dites nous tous..." style="height:200px"></textarea>
          <input type="submit" value="Envoyer">
      
        </form>
      </div>
      <?php 
        include("footbar.php")
       ?>  
</html>