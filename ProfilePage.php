<!-- BOOTSTRAP CODE START -->
<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('location: login_signup.php');
	}
?>

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
  position: absolute;
  top: 0;
  right: 50%;
  font-size: 36px;
  margin-left: 50%;
  color: #111111;
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
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="Cart.php">Cart</a>
        </li>
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="ProfilePage.php">Profile</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="login_signup.php">Login / Sign Up</a>
        </li>
		<li class="nav-item px-lg-4">
		  <a class="nav-link text-uppercase text-expanded" href="logout.php">Logout</a>
		</li>
      </ul>
    </div>
  </div>
</nav>


</body>


<section class="page-section clearfix">
  <div class="container">
    <div class="intro">
      <div class="bg-faded p-5">
        <h2 class="section-heading mb-4">
          <span class="section-heading-lower text-center">Welcome, <?php echo $_SESSION['username'] ?>.</span>
        </h2>
        <h2 class="section-heading mb-4	">
          <span class="section-heading-lower">Here are your past transactions:</span>
        </h2>
		<?php
			$conn = mysqli_connect("localhost", "root", "", "dbtest");
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "select * from transactions where username = '".$_SESSION['username']."'";
			$result = $conn->query($sql);
			$count = 1;
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "Transaction ";
					echo $count;
					echo ":<br>";
					$count = $count + 1;
					foreach($row as $x => $x_value) {
						if ($x_value != 0) {
							echo "<center>";
							echo $x;
							echo " -> ";
							echo $x_value;
							if ($x == "wholemilk" || $x == "soymilk") {
								echo " gallons<br>";
							} else if ($x == "egg") {
								echo " dozens<br>";
							}
							else {
								echo " lbs<br>";
							}
							echo "</center>";
						}
					}
				}
			}
			else {
				echo "<center><h3>";
				echo "You have no previous transactions. Buy now!";
				echo "</center></h3>";
			}
		?>
</html>

<!-- BOOTSTRAP CODE END -->
