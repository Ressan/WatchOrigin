
    <div class="containerperso" style="background-color: white; 
  width: 100vw;">
      <center>
        <a href="1_Accueil.php" id="bouton-logo"><img src="../images/logo-wo.png" alt="Logo-Wo" style=" max-width: 20%; ">
        </a>
      </center>
      <nav class="navbar navbar-expand-sm justify-content-center navstyle" >
      <ul class="nav nav-justified">

        <li class="nav-item">
          <a class="nav-link" href="2_Apropos.php"> A propos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="3_ServiceClient.php">Service client</a>
        </li>

         <li class="nav-item">  
          <a class="nav-link" href="Produit.php" id="Produit">Produit </a>
          <!--
            <div class="col-sm-6 col-md-3 nav-item dropdown">

                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">WO for men</a>
                                  <a class="dropdown-item" href="#">WO for women</a>
                                  <a class="dropdown-item" href="#">WO customs</a>
                                </div>
            </div>-->
        </li>

                            <!-- 
                            <h3>Produit</h3>
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>

                            -->

        <?php
        if(isset($_SESSION['Mail'])){      
        ?>
        <li class="nav-item">
          <a class="nav-link" href="4_profil.php" name="Compte">Mon compte</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Panier.php">Panier</a>
        </li>
        <?php

                if($_SESSION['Mail']  == 'Admin@wo.com'){

        ?>
        <li class="nav-item">
          <a class="nav-link" href="pageAdmin.php">interface Admin</a>
        </li>
        <?php
                }
            }else{
        ?>
        <li class="nav-item">
          <a class="nav-link" href="5_connexion.php" name="Connexion">Connexion</a>
        </li>
        <?php
            }
        ?>
       


      </ul>
    </nav>

      
    </div>
