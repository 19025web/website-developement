<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Nicole Crafts</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css" integrity="sha512-1hsteeq9xTM5CX6NsXiJu3Y/g+tj+IIwtZMtTisemEv3hx+S9ngaW4nryrNcPM4xGzINcKbwUJtojslX2KG+DQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="header">
  <div class="container">
    <div class="nav">
      <div class="logo">
        <a href="index.php"><img src="images/logo.png" width="125px"></a>
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

    <div class="row">
      <div class="column-2">
        <h1>Get a cute gift<br> for your friend!</h1>
        <h4>Crochet, Beads, Origami. Handmade.</h4>
        <a href="product.php" class="button">Shop Now &#8594;</a>
      </div>
      <div class="column-2">
        <img src="images/octopi.png">
      </div>
    </div>
  </div>
</div>
  <!-- featured categories -->
  <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="inline-block-child">
          <a href="product.html"><img src="images/crochet/dango.jpg"></a>
          <h3>Products</h3>
        </div>
        <div class="inline-block-child">
          <a href="about.html"><img src="images/keychains/crane-in-a-jar.jpg"></a>
          <h3>About</h3>
        </div>
        <div class="inline-block-child">
          <a href="contact.html"><img src="images/origami/pastel-stars.jpg"></a>
          <h3>Contact Us</h3>
        </div>
      </div>
    </div>
  </div>

  <!-- featured products -->
  <div class="small-container">
    <h2 class="title">Featured products</h2>
    <div class="row">
      <div class="inline-block-child">
        <img src="images/crochet/dango.jpg">
        <h4>Dango</h4>
        <p>$6.00</p>
      </div>
      <div class="inline-block-child">
        <img src="images/jewellery/earrings.jpg">
        <h4>Feather Earrings</h4>
        <p>$3.00</p>
      </div>
      <div class="inline-block-child">
        <img src="images/keychains/crane-in-a-jar.jpg">
        <h4>Crane in a Jar</h4>
        <p>$3.00</p>
      </div>
      <div class="inline-block-child">
        <img src="images/origami/pastel-stars.jpg">
        <h4>Pastel Stars</h4>
        <div class="rating">
        <p>$4.00</p>
      </div>
    </div>
  </div>
    <h2 class="title">Latest Products</h2>
    <div class="row">
      <div class="inline-block-child">
        <img src="images/origami/boats.jpg">
        <h4>Paper Boats</h4>
        <p>$4.00</p>
      </div>
      <div class="inline-block-child">
        <img src="images/needle-felt/chicken.jpg">
        <h4>Chicken</h4>
        <p>$3.00</p>
      </div>
      <div class="inline-block-child">
        <img src="images/crochet/blue-dino.jpg">
        <h4>Blue Triceratops</h4>
        <p>$5.00</p>
      </div>
      <div class="inline-block-child">
        <img src="images/crochet/pink-dino.jpg">
        <h4>Pink Triceratops</h4>
        <p>$5.00</p>
      </div>
    </div>
  </div>
</div>

  <!-- offer -->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="column-2">
          <img src="images/keychains/cherries.jpg" class="offer-img">
        </div>
        <div class="column-2">
          <p>Exclusively Availiable on Nicole Crafts</p>
          <h1>Beaded Cherry Keychain & Charm</h1>
          <small>Includes 1 beaded cherry keychain and 1 small beaded cherry charm<br></small>
          <a href="product-details.html" class="button">Buy Now &#8594;</a>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-column-1">
        <img src="images/logo.png">
      </div>
      <div class="footer-column-2">
        <h3>Useful Links</h3>
        <ul>
          <a href="index.html"><li>Home</li></a>
          <a href="product.html"><li>Products</li></a>
          <a href="about.html"><li>About</li></a>
          <a href="account.html"><li>Account</li></a>
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
<!-- Back to top button -->
<button onclick="topFunction()" id="myBtn" title="Go to top">&uarr;</button>
<script src="button-java.js"></script>

<!-- js for toggle menu -->
<script src="js/menu.js"></script>

</body>
</html>
