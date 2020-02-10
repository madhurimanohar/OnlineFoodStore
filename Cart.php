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

  <title>Cart</title>

  <!-- Bootstrap core CSS -->
  <link href="C2.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="C1.css" rel="stylesheet">

  <link href="C3.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Online Food Store</span>
    <span class="site-heading-lower">Sun Valley Market</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="HomePage.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="Products.php">Products</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="Cart.php">Cart</a>
          </li>
		  <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="ProfilePage.php">Profile</a>
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

  <section class="page-section clearfix">
    <div class="container-cart">
      <div class="intro">
        <div class="text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-lower">Cart</span>
          </h2>
			<?php
				$isCartEmpty = true;
				//display items and quantities added to the cart
				if ($_SESSION['products']['apple'] != 0) {
					echo "Apples: ";
					echo "".$_SESSION['products']['apple'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['banana'] != 0) {
					echo "Bananas: ";
					echo "".$_SESSION['products']['banana'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['pear'] != 0) {
					echo "Pears: ";
					echo "".$_SESSION['products']['pear'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['mango'] != 0) {
					echo "Mangoes: ";
					echo "".$_SESSION['products']['mango'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['strawberry'] != 0) {
					echo "Strawberries: ";
					echo "".$_SESSION['products']['strawberry'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['pineapple'] != 0) {
					echo "Pineapples: ";
					echo "".$_SESSION['products']['pineapple'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['peach'] != 0) {
					echo "Peaches: ";
					echo "".$_SESSION['products']['peach'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['watermelon'] != 0) {
					echo "Watermelons: ";
					echo "".$_SESSION['products']['watermelon'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['celery'] != 0) {
					echo "Celery: ";
					echo "".$_SESSION['products']['celery'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['carrot'] != 0) {
					echo "Carrots: ";
					echo "".$_SESSION['products']['carrot'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['broccoli'] != 0) {
					echo "Broccoli: ";
					echo "".$_SESSION['products']['broccoli'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['potato'] != 0) {
					echo "Potatoes: ";
					echo "".$_SESSION['products']['potato'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['lettuce'] != 0) {
					echo "Lettuce: ";
					echo "".$_SESSION['products']['lettuce'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['onion'] != 0) {
					echo "Onions: ";
					echo "".$_SESSION['products']['onion'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['pepper'] != 0) {
					echo "Bell Peppers: ";
					echo "".$_SESSION['products']['pepper'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['corn'] != 0) {
					echo "Corn: ";
					echo "".$_SESSION['products']['corn'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['ribeye'] != 0) {
					echo "Ribeye: ";
					echo "".$_SESSION['products']['ribeye'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['breast'] != 0) {
					echo "Chicken Breasts: ";
					echo "".$_SESSION['products']['breast'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['porkchop'] != 0) {
					echo "Porkchops: ";
					echo "".$_SESSION['products']['porkchop'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['chickenleg'] != 0) {
					echo "Chicken Legs: ";
					echo "".$_SESSION['products']['chickenleg'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['salmon'] != 0) {
					echo "Salmon: ";
					echo "".$_SESSION['products']['salmon'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['lambleg'] != 0) {
					echo "Lamb Legs: ";
					echo "".$_SESSION['products']['lambleg'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['porkbelly'] != 0) {
					echo "PorkBelly: ";
					echo "".$_SESSION['products']['porkbelly'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['chickenwing'] != 0) {
					echo "Chicken Wings: ";
					echo "".$_SESSION['products']['chickenwing'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['wholemilk'] != 0) {
					echo "Whole Milk: ";
					echo "".$_SESSION['products']['wholemilk'];
					echo " gallons";
					echo "<br>";
				}
				if ($_SESSION['products']['soymilk'] != 0) {
					echo "Soy Milk: ";
					echo "".$_SESSION['products']['soymilk'];
					echo " gallons";
					echo "<br>";
				}
				if ($_SESSION['products']['egg'] != 0) {
					echo "Eggs: ";
					echo "".$_SESSION['products']['egg'];
					echo " dozens";
					echo "<br>";
				}
				if ($_SESSION['products']['yogurt'] != 0) {
					echo "Plain Yogurt: ";
					echo "".$_SESSION['products']['yogurt'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['butter'] != 0) {
					echo "Butter: ";
					echo "".$_SESSION['products']['butter'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['acheese'] != 0) {
					echo "American Cheese: ";
					echo "".$_SESSION['products']['acheese'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['scheese'] != 0) {
					echo "Swiss Cheese: ";
					echo "".$_SESSION['products']['scheese'];
					echo " lbs";
					echo "<br>";
				}
				if ($_SESSION['products']['cream'] != 0) {
					echo "Sour Cream: ";
					echo "".$_SESSION['products']['cream'];
					echo " lbs";
					echo "<br>";
				}
				foreach($_SESSION['products'] as $x => $x_value) {
					if ($x_value != 0) {
						$isCartEmpty = false;
						echo "<br><br>";
						echo "<button type=\"button\" onclick=\"window.location.href = 'clearCart.php'\">";
						echo "Clear Cart";
						echo "</button>";
						echo "             ";
						echo "<button type=\"button\" onclick=\"window.location.href = 'Checkout.php'\">";
						echo "Checkout";
						echo "</button>";
						break ;
					}
				}
				if ($isCartEmpty == true) {
					echo "Cart is Empty.";
				}
			?>
			<br><br>
		</div> <!-- this div ends the white box, add it at the end of the cart -->
      </div>
    </div>
  </section>
</body>

</html>

<!-- BOOTSTRAP CODE END -->
