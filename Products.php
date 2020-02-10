<!-- BOOTSTRAP CODE START -->

<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location: login_signup.php');
}
?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Products</title>

  <!-- Bootstrap core CSS -->
  <link href="P2.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="P1.css" rel="stylesheet">


  <style>
    body {
      font-family: "Lato", sans-serif;
    }
    /* Fixed sidenav, full height */
    .sidenav {
      height: 100%;
      width: 175px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: transparent;
      overflow-x: hidden;
      padding-top: 20px;
    }
    /* Style the sidenav links and the dropdown button */
    .sidenav a, .dropdown-btn {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 20px;
      color: #f8de7e;
      display: block;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      outline: none;
    }
    /* On mouse-over */
    .sidenav a:hover, .dropdown-btn:hover {
      color: #f1f1f1;
    }
    /* Main content */
    .main {
      margin-left: 150px;
      font-size: 20px;
      padding: 0px 10px;
    }
    .dropdown-container {
      display: none;
      background-color: transparent;
      padding-left: 8px;
    }
    .fa-caret-down {
      float: right;
      padding-right: 8px;
    }
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

    .cards {
      display:grid;
      padding: 2rem;
      grid-template-columns: repeat(4,1fr);
      grid-auto-rows:auto;
      grid-gap:1rem;
      justify-content: center;
    }

    .flip-card {
      background-color: transparent;
      width: 250px;
      height: 250px;
      perspective: 1000px;
    }

    .flip-card-inner {
      border-radius:25px;
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.6s;
      transform-style: preserve-3d;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }

    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
      position: absolute;
      border-radius:25px;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
    }

    .flip-card-front {
      background-color: #ccc;
      color: black;
    }

    .flip-card-back {
      background-color: white;
      color: black;
      transform: rotateY(180deg);
    }

  </style>


</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Online Food Store</span>
    <span class="site-heading-lower">Sun Valley Market</span>
  </h1>

  <!DOCTYPE html>
  <html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {
        font-family: "Lato", sans-serif;
      }
      .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgba(47,23,15,.9);
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
      }
      .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #e6a756;
        display: block;
        transition: 0.3s;
      }
      .sidenav a:hover {
        color: rgba(255,255,255,.4);
      }
      .sidenav .closebtn {
        position: right;
        margin-left: 80%;
        color: rgba(255,255,255,.7);
      }
      /* Style the sidenav links and the dropdown button */
      .sidenav a, .dropdown-btn {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
      }
      @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
      }
    </style>
  </head>
  <body>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)"  class="closebtn" onclick="closeNav()">X</a>
      <button class="dropdown-btn">Fruits
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <button onclick="scrollFruit()">Apple</button>
        <br>
        <button onclick="scrollFruit()">Banana</button>
        <br>
        <button onclick="scrollFruit()">Mango</button>
        <br>
        <button onclick="scrollFruit()">Peach</button>
        <br>
        <button onclick="scrollFruit()">Pear</button>
        <br>
        <button onclick="scrollFruit()">Pineapple</button>
        <br>
        <button onclick="scrollFruit()">Strawberry</button>
        <br>
        <button onclick="scrollFruit()">Watermelon</button>
        <br>
      </div>
      <button class="dropdown-btn">Vegetables
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <button onclick="scrollVegetable()">Bell Pepper</button>
        <br>
        <button onclick="scrollVegetable()">Broccoli</button>
        <br>
        <button onclick="scrollVegetable()">Carrot</button>
        <br>
        <button onclick="scrollVegetable()">Celery</button>
        <br>
        <button onclick="scrollVegetable()">Corn</button>
        <br>
        <button onclick="scrollVegetable()">Lettuce</button>
        <br>
        <button onclick="scrollVegetable()">Onion</button>
        <br>
        <button onclick="scrollVegetable()">Potato</button>
      </div>
      <button class="dropdown-btn">Meats
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <button onclick="scrollMeat()">Chicken Breast</button>
        <br>
        <button onclick="scrollMeat()">Chicken Legs</button>
        <br>
        <button onclick="scrollMeat()">Lamb Leg</button>
        <br>
        <button onclick="scrollMeat()">Porkchops</button>
        <br>
        <button onclick="scrollMeat()">Pork Belly</button>
        <br>
        <button onclick="scrollMeat()">Ribeye</button>
        <br>
        <button onclick="scrollMeat()">Salmon</button>
      </div>
      <button class="dropdown-btn">Dairy
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <button onclick="scrollDairy()">American Cheese</button>
        <br>
        <button onclick="scrollDairy()">Butter</button>
        <br>
        <button onclick="scrollDairy()">Eggs</button>
        <br>
        <button onclick="scrollDairy()">Plain Yogurt</button>
        <br>
        <button onclick="scrollDairy()">Sour Cream</button>
        <br>
        <button onclick="scrollDairy()">Soy Milk</button>
        <br>
        <button onclick="scrollDairy()">Swiss Cheese</button>
        <br>
        <button onclick="scrollDairy()">Whole Milk</button>
        <br>
      </div>
    </div>
    <a class="nav-link text-uppercase text-expanded">
      <span style="cursor:pointer; font-size:200%; color:#e6a756" onclick="openNav()">&#9776; open</span>
    </a>
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>
  </body>
  </html>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="HomePage.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="Products.php">Products</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="Cart.php">Cart</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="ProfilePage.html">Profile</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="login_signup.php">Sign Up / Login</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--SIDE MENU START FOR AUTO SCROLLING TO EACH SECTION-->
  <script>
    function scrollMeat()
    {
      var positionMeat = document.getElementById("meatlogo");
      positionMeat.scrollIntoView(true);
    }
    function scrollFruit()
    {
      var positionFruit = document.getElementById("FruitLogo");
      positionFruit.scrollIntoView(true);
    }
    function scrollVegetable()
    {
      var positionVegetable= document.getElementById("VegetableLogo");
      positionVegetable.scrollIntoView(true);
    }
    function scrollDairy()
    {
      var positionDairy= document.getElementById("DairyLogo");
      positionDairy.scrollIntoView(true);
    }
  </script>
  <script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>


  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <div class="bg-faded p-5">
          <h2 class="section-heading mb-4">
            <span class="section-heading-lower text-center">PRODUCTS</span>
          </h2>
          <!--Start of the Fruit Card Grid-->
          <h3 class="section-heading mb-4">
            <span id="FruitLogo" class="section-heading-lowerleft text-left">Fruits</span>
          </h3>
          <!--CARDS START-->
          <section class ="cards">
            <article class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="img/Fruits/Apple.jpg" alt="Avatar" style="width:250px;height:250px;">
                </div>
                <div class="flip-card-back">
                  <span id="AppleP"><h1>Apple</h1></span>
                  <span><p>Price: $1.15 per pound</p></span>
                  <form action = "addItem.php" method = "post">
                    How many pounds would you like?<br>
                    <input type = "number" name = "numberOfApples"><br><br>
                    <input class="btn btn-primary" type = "submit" name = "apple" value = "Add to Cart">

                  </form>
                </div>
              </div>
            </article>
            <article class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="img/Fruits/Banana.jpeg" alt="Avatar" style="width:250px;height:250px;">
                </div>
                <div class="flip-card-back">
                  <h1>Banana</h1>
                  <span><p>Price: $0.58 per pound</p></span>
                  <form action = "addItem.php" method = "post">
                    How many pounds would you like?<br>
                    <input type = "number" name = "numberOfBananas"><br>
                    <input type = "submit" name = "banana" value = "Add to Cart">
                  </form>
                </div>
              </div>
            </article>
            <article class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="img/Fruits/Pear.jpg" alt="Avatar" style="width:250px;height:250px;">
                </div>
                <div class="flip-card-back">
                  <h1>Pear</h1>
                  <p>Price: $1.6 per pound</p>
                  <form action = "addItem.php" method = "post">
                    How many pounds would you like?<br>
                    <input type = "number" name = "numberOfPears"><br>
                    <input type = "submit" name = "pear" value = "Add to Cart">
                  </form>
                </div>
              </article>
              <article class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="img/Fruits/mango.jpg" alt="Avatar" style="width:250px;height:250px;">
                  </div>
                  <div class="flip-card-back">
                    <h1>Mango</h1>
                    <p>Price: $.$$</p>
                    <p>Weight #.##lbs</p>
                    <button class="w3-button w3-teal">-</button>
                    <input type="text" name="name" value="1" size="5">
                    <button class="w3-button w3-teal">+</button>
                    <br><br>
                    <!--###############Needs to run a script###############-->
                    <a class="btn btn-primary">Add to Cart</a>
                  </div>
                </article>
                <article class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="img/Fruits/strawberry.jpg" alt="Avatar" style="width:250px;height:250px;">
                    </div>
                    <div class="flip-card-back">
                      <h1>Strawberry</h1>
                      <p>Price: $.$$</p>
                      <p>Weight #.##lbs</p>
                      <button class="w3-button w3-teal">-</button>
                      <input type="text" name="name" value="1" size="5">
                      <button class="w3-button w3-teal">+</button>
                      <br><br>
                      <!--###############Needs to run a script###############-->
                      <a class="btn btn-primary">Add to Cart</a>
                    </div>
                  </article>
                  <article class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="img/Fruits/pineapple.jpg" alt="Avatar" style="width:250px;height:250px;">
                      </div>
                      <div class="flip-card-back">
                        <h1>Pineapple</h1>
                        <p>Price: $.$$</p>
                        <p>Weight #.##lbs</p>
                        <button class="w3-button w3-teal">-</button>
                        <input type="text" name="name" value="1" size="5">
                        <button class="w3-button w3-teal">+</button>
                        <br><br>
                        <!--###############Needs to run a script###############-->
                        <a class="btn btn-primary">Add to Cart</a>
                      </div>
                    </article>
                    <article class="flip-card">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img src="img/Fruits/peach.jpg" alt="Avatar" style="width:250px;height:250px;">
                        </div>
                        <div class="flip-card-back">
                          <h1>Peach</h1>
                          <p>Price: $.$$</p>
                          <p>Weight #.##lbs</p>
                          <button class="w3-button w3-teal">-</button>
                          <input type="text" name="name" value="1" size="5">
                          <button class="w3-button w3-teal">+</button>
                          <br><br>
                          <!--###############Needs to run a script###############-->
                          <a class="btn btn-primary">Add to Cart</a>
                        </div>
                      </article>
                      <article class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <img src="img/Fruits/watermelon.jpg" alt="Avatar" style="width:250px;height:250px;">
                          </div>
                          <div class="flip-card-back">
                            <h1>Watermelon</h1>
                            <p>Price: $.$$</p>
                            <p>Weight #.##lbs</p>
                            <button class="w3-button w3-teal">-</button>
                            <input type="text" name="name" value="1" size="5">
                            <button class="w3-button w3-teal">+</button>
                            <br><br>
                            <!--###############Needs to run a script###############-->
                            <a class="btn btn-primary">Add to Cart</a>
                          </div>
                        </article>
                      </section>
                      <!--cards end-->

                      <!--VEGETABLES-->
                      <h3 class="section-heading mb-4">
                        <span id="VegetableLogo" class="section-heading-lowerleft text-left">Vegetables</span>
                      </h3>
                      <!--CARDS START-->
                      <section class ="cards">
                        <article class="flip-card">
                          <div class="flip-card-inner">
                            <div class="flip-card-front">
                              <img src="img/Vegetables/Celery.jpg" alt="Avatar" style="width:250px;height:250px;">
                            </div>
                            <div class="flip-card-back">
                              <h1>Celery</h1>
                              <p>Price: $2.00 per pound</p>
                              <form action = "addItem.php" method = "post">
                                How many bunches would you like?<br>
                                <input type = "number" name = "numberOfCelery"><br>
                                <input type = "submit" name = "celery" value = "Add to Cart">
                              </form>
                            </div>
                          </div>
                        </article>
                        <article class="flip-card">
                          <div class="flip-card-inner">
                            <div class="flip-card-front">
                              <img src="img/Vegetables/Carrot.jpg" alt="Avatar" style="width:250px;height:250px;">
                            </div>
                            <div class="flip-card-back">
                              <h1>Carrot</h1>
                              <p>Price: $0.70 per pound</p>
                              <form action = "addItem.php" method = "post">
                                How many pounds would you like?<br>
                                <input type = "number" name = "numberOfCarrots"><br>
                                <input type = "submit" name = "carrot" value = "Add to Cart">
                              </form>
                            </div>
                          </div>
                        </article>
                        <article class="flip-card">
                          <div class="flip-card-inner">
                            <div class="flip-card-front">
                              <img src="img/Vegetables/Broccoli.jpg" alt="Avatar" style="width:250px;height:250px;">
                            </div>
                            <div class="flip-card-back">
                              <h1>Broccoli</h1>
                              <p>Price: $1.70 per pound</p>
                              <form action = "addItem.php" method = "post">
                                How many pounds would you like?<br>
                                <input type = "number" name = "numberOfBroccoli"><br>
                                <input type = "submit" name = "broccoli" value = "Add to Cart">
                              </form>
                            </div>
                          </article>
                          <article class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="img/Vegetables/potato.jpg" alt="Avatar" style="width:250px;height:250px;">
                              </div>
                              <div class="flip-card-back">
                                <h1>Potato</h1>
                                <p>Price: $.$$</p>
                                <p>Weight #.##lbs</p>
                                <button class="w3-button w3-teal">-</button>
                                <input type="text" name="name" value="1" size="5">
                                <button class="w3-button w3-teal">+</button>
                                <br><br>
                                <!--###############Needs to run a script###############-->
                                <a class="btn btn-primary">Add to Cart</a>
                              </div>
                            </article>
                            <article class="flip-card">
                              <div class="flip-card-inner">
                                <div class="flip-card-front">
                                  <img src="img/Vegetables/lettuce.jpg" alt="Avatar" style="width:250px;height:250px;">
                                </div>
                                <div class="flip-card-back">
                                  <h1>Lettuce</h1>
                                  <p>Price: $.$$</p>
                                  <p>Weight #.##lbs</p>
                                  <button class="w3-button w3-teal">-</button>
                                  <input type="text" name="name" value="1" size="5">
                                  <button class="w3-button w3-teal">+</button>
                                  <br><br>
                                  <!--###############Needs to run a script###############-->
                                  <a class="btn btn-primary">Add to Cart</a>
                                </div>
                              </article>
                              <article class="flip-card">
                                <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="img/Vegetables/onion.jpg" alt="Avatar" style="width:250px;height:250px;">
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Onion</h1>
                                    <p>Price: $.$$</p>
                                    <p>Weight #.##lbs</p>
                                    <button class="w3-button w3-teal">-</button>
                                    <input type="text" name="name" value="1" size="5">
                                    <button class="w3-button w3-teal">+</button>
                                    <br><br>
                                    <!--###############Needs to run a script###############-->
                                    <a class="btn btn-primary">Add to Cart</a>
                                  </div>
                                </article>
                                <article class="flip-card">
                                  <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                      <img src="img/Vegetables/BellPepper.jpg" alt="Avatar" style="width:250px;height:250px;">
                                    </div>
                                    <div class="flip-card-back">
                                      <h1>Bell Pepper</h1>
                                      <p>Price: $.$$</p>
                                      <p>Weight #.##lbs</p>
                                      <button class="w3-button w3-teal">-</button>
                                      <input type="text" name="name" value="1" size="5">
                                      <button class="w3-button w3-teal">+</button>
                                      <br><br>
                                      <!--###############Needs to run a script###############-->
                                      <a class="btn btn-primary">Add to Cart</a>
                                    </div>
                                  </article>
                                  <article class="flip-card">
                                    <div class="flip-card-inner">
                                      <div class="flip-card-front">
                                        <img src="img/Vegetables/corn.jpg" alt="Avatar" style="width:250px;height:250px;">
                                      </div>
                                      <div class="flip-card-back">
                                        <h1>Corn</h1>
                                        <p>Price: $.$$</p>
                                        <p>Weight #.##lbs</p>
                                        <button class="w3-button w3-teal">-</button>
                                        <input type="text" name="name" value="1" size="5">
                                        <button class="w3-button w3-teal">+</button>
                                        <br><br>
                                        <!--###############Needs to run a script###############-->
                                        <a class="btn btn-primary">Add to Cart</a>
                                      </div>
                                    </article>
                                  </section>
                                  <!--cards end-->

                                  <h3 class="section-heading mb-4">
                                    <span id= "meatlogo" class="section-heading-lowerleft text-left">Meats</span>
                                  </h3>
                                  <!--CARDS START-->
                                  <section class ="cards">
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Meats/Ribeye.jpg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Ribeye</h1>
                                          <p>Price: $10 per pound</p>
                                          <form action = "addItem.php" method = "post">
                                            How many pounds would you like?<br>
                                            <input type = "number" name = "numberOfRibeye"><br>
                                            <input type = "submit" name = "ribeye" value = "Add to Cart">
                                          </form>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Meats/ChickenBreast.jpg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Chicken Breast</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Meats/porkchops.png" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Porkchops</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Meats/chickenlegs.jpg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Chicken Legs</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Meats/salmon.jpg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Salmon</h1>
                                          <p>Price: $25 per pound</p>
                                          <form action = "addItem.php" method = "post">
                                            How many pounds would you like?<br>
                                            <input type = "number" name = "numberOfSalmon"><br>
                                            <input type = "submit" name = "salmon" value = "Add to Cart">
                                          </form>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Meats/LambLeg.jpg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Lamb Leg</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Meats/PorkBelly.jpg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Pork Belly</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Meats/ChickenWings.jpeg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Chicken Wings</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                  </section>
                                  <h3 class="section-heading mb-4">
                                    <span id= "DairyLogo" class="section-heading-lowerleft text-left">Dairy</span>
                                  </h3>
                                  <!--CARDS START-->
                                  <section class ="cards">
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Dairy/wholeMilk.jpeg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Whole Milk</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Dairy/soyMilk.jpeg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Soy Milk</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Dairy/eggs.jpeg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Eggs</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Dairy/plainYogurt.jpeg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Plain Yogurt</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Dairy/butter.jpeg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Butter</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Dairy/americanCheese.jpeg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>American Cheese</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Dairy/swissCheese.jpeg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Swiss Cheese</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="img/Dairy/sourCream.jpeg" alt="Avatar" style="width:250px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                          <h1>Sour Cream</h1>
                                          <p>Price: $.$$</p>
                                          <p>Weight #.##lbs</p>
                                          <button class="w3-button w3-teal">-</button>
                                          <input type="text" name="name" value="1" size="5">
                                          <button class="w3-button w3-teal">+</button>
                                          <br><br>
                                          <!--###############Needs to run a script###############-->
                                          <a class="btn btn-primary">Add to Cart</a>
                                        </div>
                                      </div>
                                    </article>

                                  </div>
                                </div>
                                <!--End of Intro-->
                              </section>

                            </body>

                            </html>

                            <!-- BOOTSTRAP CODE END -->
