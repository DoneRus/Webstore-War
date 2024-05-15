

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../styleNew.css">
    <title>homepage</title>
</head>
<body>
<!--? ========== Navbar Section ========== -->
    <section>
      <nav class="navbar">
        <a href="index.php" class="brending">MediaMarkt</a>
        <ul class="nav_menu">
            <li class="li nav_item">
              <a href="products.php" class="nav_link"><i class="ri-box-1-fill"></i>Producten</a>
            </li>
            <li class="li_input nav_item">
              <input type="text" placeholder="Search here...">
              <i class="ri-search-line"></i>
            </li>
            <li class="li nav_item">
              <a href="account.php" class="nav_link"><i class="ri-account-circle-fill"></i><?php if(isset($_SESSION['user_name'])){echo $_SESSION['user_name'];}else{echo "Account";} ?></a>
            </li>
            <li class="li nav_item">
              <a href="winkelwagentje.php" class="nav_link"><i class="ri-shopping-cart-fill"></i>Winkelwagentje</a>
            </li>
            <li class="li nav_item">
              <a href="contact.php" target="_blank" class="nav_link"><i class="ri-contacts-fill"> Contact</i></a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
      </nav>
    </section>

<!--? ========== Main Content Section ========== -->

        <div class="mainContent">
            <h1>Welkom onze nieuwe website </h1>
            <p>21% Korting op alle producten !</p>
            <img src="../img/medimarkt1.jpg" class="media" alt="">
        </div>    

      <!--? ==========Footer Section ========== -->

    <footer class="footer">
      <div class="container footer-container">
          <div class="footer-item">
              <h2>MediaMarkt</h2>
              <span>Welkom onze nieuwe online shopping winkel.<br></span>
          </div>
          <div class="footer-item">
              <h2>Support</h2>
              <p>Gouda, Nederland</p>
              <a href="mailto:MediaShop@email.nl">MediaShop@gmail.com</a>
              <p>+31 042 345 6729</p>
          </div>
          <div class="footer-item">
              <h2>Account</h2>
              <a href="#">Dashboard</a>
              <a href="login.php">Sign Up</a>
              <a href="login.php">Login</a>
          </div>
          <div class="footer-item">
              <h2>Quick Link</h2>
              <p>Contact</p>
              
          </div>
      </div>
  </footer>

    </body>
    </html>

<!--* ========== Javascript Link ========== -->

    <script src="script.js"></script>
</body>
</html>