
      <div class="containerperso justify-center">
          <a href=".." style="text-decoration: none; ">
          <img src="../images/logo-wo.png" alt="Logo-Wo" style=" max-width: 10%; ">
          WO</a> 
      </div>
    <nav class="navbar navbar-expand-sm bg-light navbar-dark justify-content-center">
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
        </li>

      </ul>
    </nav>
    

        <div class="col-sm-6 col-md-3 item">
                    <h3>Produit</h3>
                    <ul>
                        <li><a href="#">WO for men</a></li>
                        <li><a href="#">WO for women</a></li>
                        <li><a href="#">WO customs</a></li>
                    </ul>
        </div>