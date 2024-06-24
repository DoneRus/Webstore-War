<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inloggen | MediaMarkt</title>
    <link rel="stylesheet" href="../styleNew.css">
  </head>
  <body style="font-family: -apple-system, BlinkMacSystemFont, segoe ui, roboto, oxygen, ubuntu, cantarell, fira sans, droid sans, helvetica neue, Arial, sans-serif;">
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

    <div style="text-align: center">
      <h2 class="two">Inloggen</h2>
      <p class="een">Log in en profiteer van alle MediaMarkt-voordelen. Nieuw klant?</p>
      <a href="" class="aanmelden"><ins><p >Meld je aan</p></ins></a>

      <form>
        <p class="twee"><input type="text" dir="rtl" placeholder="E-mailadres" /></p>
        <p class="drie"><input type="password" dir="rtl" placeholder="Wachtwoord" /></p>

        <a href="" class="wachtwoord"><ins><h4 class="three">Wachtwoord vergeten?</h4></ins></a>

        <button
          type="submit"
          aria-disabled="false"
          class="sc-89522840-1 jCVDoJ"
          translate="no"
          id="mms-login-form__login-button"
          fdprocessedid="2dpuma">
          Aanmelden<span class="sc-a8663f6a-0 iWuUrL"></span>

          <span class="sc-a8663f6a-0"></span>
        </button>
      </form>
    </div>
  </body>
</html>
