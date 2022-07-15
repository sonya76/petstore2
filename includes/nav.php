<?php
session_start();
?>
<header>
  <nav id="navp">
    <div id=logoNav>
      <a href="index.php?page=accueil"><img src="./assets/img/logo1.png" alt="logo de petstore  " /></a>
    </div>
    <div>
      <ul id="headMenu">
        <div class="container"><input type="search" placeholder="Rechercher ..." /><button type="submit">Search</button></div>
        

       

        
        <?php
        if (isset($_SESSION['loginUser'])) {
        ?>
        <li>
          <a href="index.php?page=accueil">
            <div class="icon"><i class="fa-solid fa-house fa-2xl"></i></div>
            <div><span>Home</span></div>
          </a>
        </li>
        
        <li>
          <a href="index.php?page=contact">
            <div class="icon"><i class="fa-solid fa-phone fa-2xl"></i></div>
            <div><span>Contact</span></div>
          </a>
        </li>

           
                <li>
          <a href="">
            <div class="icon">
              <i class="fa-solid fa-basket-shopping fa-2xl"></i>
            </div>
            <div><span>Panier</span></div>
          </a>
        </li>
         <li>
              <a href="index.php?page=logout">
                <div class="icon"><i class="fa-solid fa-right-from-bracket fa-2xl"></i></div>
                <div><span>Logout</span></div>
              </a>
            </li>
        <?php } else { ?>
          <li>
          <a href="index.php?page=accueil">
            <div class="icon"><i class="fa-solid fa-house fa-2xl"></i></div>
            <div><span>Home</span></div>
          </a>
        </li>
        
        <li>
          <a href="index.php?page=contact">
            <div class="icon"><i class="fa-solid fa-phone fa-2xl"></i></div>
            <div><span>Contact</span></div>
          </a>
        </li>


          <li>
            <a href="index.php?page=connexion">
              <div class="icon"><i class="fa-solid fa-user fa-2xl"></i></div>
              <div><span>Connexion</span></div>
            </a>
          </li>
          <li>
          <a href="">
            <div class="icon">
              <i class="fa-solid fa-basket-shopping fa-2xl"></i>
            </div>
            <div><span>Panier</span></div>
          </a>
        </li>
        <?php } ?>

       
      </ul>
    </div>
  </nav>
</header>