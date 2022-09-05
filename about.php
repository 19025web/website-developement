<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - Nicole Crafts</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css" integrity="sha512-1hsteeq9xTM5CX6NsXiJu3Y/g+tj+IIwtZMtTisemEv3hx+S9ngaW4nryrNcPM4xGzINcKbwUJtojslX2KG+DQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container">

  <div class="nav">
    <div class="logo">
      <a href="index.php"><img src="images/logo.png" class="image" alt="Nicole Crafts Logo"></a>
    </div>
    <nav>
      <ul id="MenuItems">
        <li><a href="index.php">Home</a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
      <i class="fa fa-bars menu-icon" onclick="menutoggle()"></i>
    </nav>
  </div>
</div>

<!-- about -->
<div class="small-container">
  <div class="row row-2">
    <h2>About</h2>
    <div class="row">
      <div class="column-2">
        <img src="images/octopi.png" alt="Octopi">
      </div>
      <div class="column-2">
        <p>This website sells handmade products by Nicole. We sell things like crochet plushies, keychains, origami stars, and beaded things.</p>
      </div>

    </div>
  </div>
</div>


<!-- footer -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-column-1">
        <img src="images/logo.png" alt="Nicole Crafts Logo">
      </div>
      <div class="footer-column-2">
        <h3>Useful Links</h3>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="product.php">Products</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="account.php">Account</a></li>
        </ul>
      </div>
      <div class="footer-column-3">
        <h3>Contact Us</h3>
        <ul>
          <li>Email: 19025.web@gmail.com</li>
          <li>Phone: 022 458 9688</li>
        </ul>
    </div>

    </div>
    <hr>
    <p class="copyright">Copyright 2022 - Nicole Wong</p>
  </div>
</div>

<!-- js for toggle menu -->
<script src="js/menu.js"></script>

</body>
</html>
