
      <div class="containerperso justify-center">
          <a href=".." id="bouton-logo">
          <img src="../images/logo-wo.png" alt="Logo-Wo" style=" max-width: 10%; ">
          WO</a>
      </div>
    <nav class="navbar navbar-expand-sm bg-light justify-content-center navstyle" >
      <ul class="nav nav-justified">
        <li class="nav-item">
          <a class="nav-link" href="2_Apropos.php"> A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="3_ServiceClient.php">Service client</a>
        </li>
        <?php
        if(isset($_SESSION['Mail'])){      
        ?>
        <li class="nav-item">
          <a class="nav-link" href="4_profil.php" name="Compte">Mon compte</a>
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
<<<<<<< HEAD
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Produit.php">Produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Panier.php">Panier</a>
        </li>
        
                            <!-- 
                            <h3>Produit</h3>
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
=======
        <li>  
            <div class="col-sm-6 col-md-3 nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Produit </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">WO for men</a>
                                  <a class="dropdown-item" href="#">WO for women</a>
                                  <a class="dropdown-item" href="#">WO customs</a>
                                </div>
            </div>
        </li>
>>>>>>> parent of ac46797 (Update)

        </li>
                            <!-- 
                            <h3>Produit</h3>
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>

                            -->

      </ul>
    </nav>

        