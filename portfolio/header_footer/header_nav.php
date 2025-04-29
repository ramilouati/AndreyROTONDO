<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">LOGO</h1>
      </a>

      <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="../portfolio/index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">Accueil</a></li>
        <li><a href="../portfolio/about.php" class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">A propos</a></li>
        <li><a href="../portfolio/pub_scientifiques.php" class="<?= ($current_page == 'pub_scientifiques.php') ? 'active' : '' ?>">Publications scientifiques</a></li>
        <li><a href="../portfolio/Article_de_presse.php" class="<?= ($current_page == 'Article_de_presse.php') ? 'active' : '' ?>">Articles de presse</a></li>
        <li><a href="../portfolio/contact.php" class="<?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
      </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="https://whatsapp.com/channel/0029Vb54sJOATRSqq9gr9L11" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.facebook.com/share/19Yrm9t6nT/?mibextid=wwXIfr" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/andreyrotondo/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="mailto:andreyrotondopro@gmail.com?subject=Hello&body=I%20would%20like%20to%20contact%20you" class="instagram">
          <i class="bi bi-envelope-paper-fill"></i>
        </a>      
      </div>
    </div>
  </header>