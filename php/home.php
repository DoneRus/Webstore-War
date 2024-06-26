<?php
// Check if session has already started
if (session_status() == PHP_SESSION_NONE) {
  // Start the session if it hasn't been started yet
  session_start();
}

// Retrieve user data from session variables
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null;
$user_email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : null;
?>




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
        <a href="home.php" class="brending">MediaMarkt</a>
        <ul class="nav_menu">
            <li class="li nav_item">
              <a href="products.php" class="nav_link"><i class="ri-box-1-fill"></i>Producten</a>
            </li>
            <li class="li_input nav_item">
              <input type="text" placeholder="Search here...">
              <i class="ri-search-line"></i>
            </li>
            <li class="li nav_item">
        <a href="<?php echo isset($_SESSION['user_name']) ? 'InloggegevensPage.php' : 'account.php'; ?>" class="nav_link">
        <i class="ri-account-circle-fill"></i>
        <?php
      if (isset($_SESSION['user_name'])) {
        echo $_SESSION['user_name'];
      } else {
        echo "Account";
      }
       ?>
      </a>
    </li>
            <li class="li nav_item">
              <a href="index2.php?page=cart" class="nav_link"><i class="ri-shopping-cart-fill"></i>Winkelwagentje</a>
            </li>
            <li class="li nav_item">
              <a href="contact.php" target="_blank" class="nav_link"><i class="ri-contacts-fill"> Contact</i></a>
            </li>
            <li class="li nav_item">
              <a href="loguit.php" class="nav_link"><i class="ri-shopping-cart-fill"></i>LogUit</a>
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