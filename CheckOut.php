<!-- BOOTSTRAP CODE START -->
<!DOCTYPE html>
<html lang="en">

<?php
	session_start();
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=2">
  <link href="HP1.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="HP2.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
  <link href="HP1.css" rel="stylesheet">
  <title>Checkout</title>

  <style>
    body {
      font-family: Arial;
      font-size: 15px;
      padding: 7px;
    }

    *{
      box-sizing: border-box;
    }

    .row {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin: 0 -15px;
    }

    .col-25 {
      -ms-flex: 25%;
      flex: 25%;
    }

    .col-50 {
      -ms-flex: 50%;
      flex: 50%;
    }

    .col-75 {
      -ms-flex: 75%;
      flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }

    .container {
      background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;

    }
    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    label {
      margin-bottom: 10px;
      display: block;
    }

    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }

    .btn {
      background-color: #4CAF50;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }

    .btn:hover {
      background-color: #45a049;
    }

    a {
      color: #2196F3;
    }

    hr {
      border: 1px solid lightgrey;
    }

    span.price {
      float: right;
      color: grey;
    }

    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }
      .col-25 {
        margin-bottom: 20px;
      }
    }

  </style>
</head>
<body>
  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Online Food Store</span>
    <span class="site-heading-lower">Sun Valley Market</span>
  </h1>

  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
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
 		 <li class="nav-item px-lg-4">
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
  </nav>
<br><br>
  <!-- <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
    <h1> <font color="white">Complete Checkout</font></h1>
  </nav> -->

  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="finalCheckout.php" method = "post">

          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" name="firstname" placeholder="Name">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" name="email" placeholder="Email">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" name="address" placeholder="1 Washington Sq">
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" name="city" placeholder="San Jose">

              <div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <input type="text" name="state" placeholder="CA">
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" name="zip" placeholder="95122">
                </div>
              </div>
            </div>

            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" name="cardname" placeholder="Name">
              <label for="ccnum">Credit card number</label>
              <input type="text" name="cardnumber">
              <label for="expmonth">Exp Month</label>
              <input type="text" name="expmonth">
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" name="expyear">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" name="cvv">
                </div>
              </div>
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" name="address" placeholder="1 Washington Sq">
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" name="city" placeholder="San Jose">
              <div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <input type="text" name="state" placeholder="CA">
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" name="zip" placeholder="95122">
                </div>
              </div>



              <script>    /* this code segment decreases the quantity of item when '-' is clicked */
              document.getElementById("minus").onclick = function() {subQuantity()};
              function subQuantity() {
                if(document.getElementById("value").value == 0) {
                  document.getElementById("value").value;
                }
                else {
                  document.getElementById("value").value--;
                  document.getElementById("price").innerHTML--;
                }
              }
              </script>


            </div>
          </div>
          <input type="submit" value="Checkout" class="btn">
        </form>
      </div>
    </div>
    <div class="col-25">
      <div class="container">
        <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i><b></b></span></h4>
        <?php
		$totalPrice = 0;
		$totalWeight = 0;
		foreach($_SESSION['products'] as $x => $x_value) {
			if ($x_value != 0) {
				$price = $_SESSION['prices'][$x] * $x_value;
				$totalWeight = $_SESSION['products'][$x] + $totalWeight;
				$totalPrice = $price + $totalPrice;
				echo $x;
				echo "<span class='price'>$";
				echo "".$price;
				echo "</span></p>";
			}
		}
		$tax = 0.0925 * $totalPrice;
		$totalPrice = $tax + $totalPrice;
		?>
        <hr>
		<?php
			if ($totalWeight > 20) {
				echo "<b><p>Delivery Fee <span class='price' style='color:black'><b>$5";
				$totalPrice = $totalPrice + 5;
			}
		 ?>
        <p>Tax <span class="price" style="color:black"><b>$<?php echo "".round($tax, 2);?></b></span></p>
        <p>Total <span class="price" style="color:black"><b>$<?php echo "".round($totalPrice,2)?></b></span></p>
      </div>
    </div>
  </div>

</body>

</html>

<!-- BOOTSTRAP CODE END -->
