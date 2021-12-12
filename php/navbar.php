    <h1>
    <a href="..">WO</a>
    </h1>
    <li>
    <a href="2_Apropos.php"> A propos</a>
    <a href="3_ServiceClient.php">Service client</a>
    <?php
    if(isset($_SESSION['Mail'])){
          
          ?>
          <a href="4_profil.php" name="Compte">Mon compte</a>
    <?php
        }else{
    ?>
          <a href="5_connexion.php" name="Connexion">Connexion</a>
    <?php
        }

    ?>
    </li>

        <div class="col-sm-6 col-md-3 item">
                    <h3>Produit</h3>
                    <ul>
                        <li><a href="#">WO for men</a></li>
                        <li><a href="#">WO for women</a></li>
                        <li><a href="#">WO customs</a></li>
                    </ul>
        </div>