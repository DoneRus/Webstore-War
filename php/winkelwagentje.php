<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../styleNew.css">
    <title>Add to Cart</title>
</head>

<body>
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
                <a href="contact.php" class="nav_link"><i class="ri-contacts-fill"></i>Contact</a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</section>

<!-- Add to cart Section -->
<section class="addToCartSection">
    <h1 class="addtocartHeading"></h1>
    <div id="cart">
        <?php
        if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                echo "<div>Product Name: " . $item['name'] . ", Price: €" . $item['price'] . "</div>";
            }
        } else {
            echo "Your cart is empty";
        }
        ?>
    </div>
    <form id="checkout-form" action="winkelwagentje.php" method="post">
    <div class="addToCartSubmitBtn">
    <!-- Hidden input fields for product name and price -->
    <input type="hidden" id="" name="productName" value="">
    <input type="hidden" id="" name="productPrice" value="">
    <!-- Hidden input field for cart data -->
    <input type="hidden" id="cart-data" name="cart" value="">
    <button type="submit" name="submit" class="submitButton">Checkout</button>
    </div>
</form>
</section>

<!-- Footer Section -->
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
