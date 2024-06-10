<?php
include 'index.php';
// The amounts of products to show on each page
$num_products_on_each_page = 4;
// The current page - in the URL, will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT ?,?');
// bindValue will allow us to use an integer in the SQL statement, which we need to use for the LIMIT clause
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Get the total number of products
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
?>

<!-- Divided line-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>

    <title>productpage</title>
</head>
<body>
<!--? ========== Navbar Section ========== -->
    <section>
          <link rel="stylesheet" href="../styleNew.css">
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
              <a href="account.php" class="nav_link"><i class="ri-account-circle-fill"></i><?php if(isset($_SESSION['user_name'])){echo $_SESSION['user_name'];}else{echo "Account";} ?></a>
            </li>
            <li class="li nav_item">
              <a href="index2.php?page=cart" class="nav_link"><i class="ri-shopping-cart-fill"></i>Winkelwagentje</a>
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
    

    </body>
</html>




















<?=template_header('Products')?>






<div class="products content-wrapper">
    <h1>Popular Products</h1>

    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
        <a href="index2.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="../img/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="index2.php?page=products&p=<?=$current_page-1?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <a href="index2.php?page=products&p=<?=$current_page+1?>">Next</a>
        <?php endif; ?>
    </div>
</div>

<div class="container2">
    <h1 style=" text-align: center;">Alle Producten</h1>
    <div class="space-casings">
        
        <!-- Product 1 -->
        <div class="container-card">
          <div class="product-image2">
            <img src="../img/ipad.jpg" alt="" />
          </div>
          <h2>Apple Ipad 2020</h2>
          <p>€599,–</p>
          <button class="btn">Bestel nu</button>
          <button class="btn" onclick="addToCart(1)">Add to Basket</button>
        </div>

        <!-- Product 2 -->
        <div class="container-card">
          <div class="product-image2">
            <img src="../img/jbl.jpg" alt="" />
          </div>
          <h2>JBL Koptelefoon</h2>
          <p>€49,–</p>
          <button class="btn">Bestel nu</button>
          <button class="btn" onclick="addToCart(1)">Add to Basket</button>
        </div>

        <!-- Product 3 -->
        <div class="container-card">
          <div class="product-image2">
            <img src="../img/acer laptop.jpg" alt="" />
          </div>
          <h2>Acer Laptop</h2>
          <p>€899,–</p>
          <button class="btn">Bestel nu</button>
          <button class="btn" onclick="addToCart(1)">Add to Basket</button>
        </div>

        <!-- Product 4 -->
        <div class="container-card">
          <div class="product-image2">
            <img src="../img/xiaomi watch.jpg" alt="" />
          </div>
          <h2>Xiaomi Watch</h2>
          <p>€49,99</p>
          <button class="btn">Bestel nu</button>
          <button class="btn" onclick="addToCart(1)">Add to Basket</button>
        </div>
      </div>
    </div>

    <div class="container2">
      <div class="space-casings">
        <!--  -->
        <div class="container-card">
          <div class="product-image2">
            <img src="../img/apple watch.jpg" alt="" />
          </div>
          <h2>APPLE Watch</h2>
          <p>€399,99</p>
          <button class="btn">Bestel nu</button>
          <button class="btn" onclick="addToCart(1)">Add to Basket</button>
        </div>

        <!--  -->
        <div class="container-card">
          <div class="product-image2">
            <img src="../img/logitech mouse.jpg" alt="" />
          </div>
          <h2>LOGITECH MX Master</h2>
          <p>€79,99</p>
          <button class="btn">Bestel nu</button>
          <button class="btn" onclick="addToCart(1)">Add to Basket</button>
        </div>

        <!--  -->
        <div class="container-card">
          <div class="product-image2">
            <img src="../img/SamsungDrive.jpg" alt="" />
          </div>
          <h2>SAMSUNG 2TB SDD</h2>
          <p>€99,99</p>
          <button class="btn">Bestel nu</button>
          <button class="btn" onclick="addToCart(1)">Add to Basket</button>
        </div>

        <!--  -->
        <div class="container-card">
          <div class="product-image2">
            <img src="../img/macbook.webp" alt="" />
          </div>
          <h2>Macbook 2021</h2>
          <p>€1019,99</p>
          <button class="btn">Bestel nu</button>
          <button class="btn" onclick="addToCart(1)">Add to Basket</button>
        </div>
      </div>
    </div>


    










  </body>


