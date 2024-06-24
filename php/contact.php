<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../styleNew.css">
    <title>Contact</title>
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
        <!--? ========== Contact Section ========== -->
        <section>
            <div class="contactUS">
                <h1>Contact Us</h1>
                <form action="https://formspree.io/f/xnqeozod" method="post">
                    <div class="contactInputBoxex">
                        <input type="text" id="name" name="text" placeholder="Enter Name">
                        <input type="email" id="email" name="email" placeholder="Enter Email">
                        <textarea name="" id="message" name="message"cols="30" rows="8" placeholder="Enter Message"></textarea>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </section>

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