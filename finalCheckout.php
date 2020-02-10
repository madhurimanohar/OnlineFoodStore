<?php
	session_start();
	if (($_POST['firstname']) == "") {
		echo "<script>
			alert('Please enter all the fields.');
			window.location.href='Checkout.php';
			</script>
		";
	}
	else if (($_POST['email']) == "") {
		echo "<script>
			alert('Please enter all the fields.');
			window.location.href='Checkout.php';
			</script>
		";
	}
	else if (($_POST['address']) == "") {
		echo "<script>
			alert('Please enter all the fields.');
			window.location.href='Checkout.php';
			</script>
		";
	}
	else if (($_POST['city']) == "") {
		echo "<script>
			alert('Please enter all the fields.');
			window.location.href='Checkout.php';
			</script>
		";
	}
	else if (($_POST['state']) == "") {
		echo "<script>
			alert('Please enter all the fields.');
			window.location.href='Checkout.php';
			</script>
		";
	}
	else if (($_POST['zip']) == "") {
		echo "<script>
			alert('Please enter all the fields.');
			window.location.href='Checkout.php';
			</script>
		";
	}
	else if (($_POST['cardname']) == "") {
		echo "<script>
			alert('Please enter all the fields.');
			window.location.href='Checkout.php';
			</script>
		";
	}
	else if (($_POST['cardnumber']) == "") {
		echo "<script>
			alert('Please enter all the fields.');
			window.location.href='Checkout.php';
			</script>
		";
	}
	else if (($_POST['expmonth']) == "") {
		echo "<script>
			alert('Please enter all the fields.');
			window.location.href='Checkout.php';
			</script>
		";
	}
	else if (($_POST['expyear']) == "") {
		echo "<script>
			alert('Please enter all the fields.');
			window.location.href='Checkout.php';
			</script>
		";
	}
	else if (($_POST['cvv']) == "") {
		echo "<script>
			alert('Please enter all the fields.');
			window.location.href='Checkout.php';
			</script>
		";
	} else {
		foreach ($_SESSION['products'] as $x => $x_value) {
			$_SESSION['stock'][$x] = $_SESSION['stock'][$x] - $x_value;
		}

		$conn = mysqli_connect("localhost", "root", "", "dbtest");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$deleteRow = "delete from inventory";
		$results = mysqli_query($conn, $deleteRow);

		$stockUpdate = "INSERT INTO inventory (apple, banana, pear, celery, carrot, broccoli, ribeye, salmon, mango, strawberry, pineapple, peach, watermelon, potato, lettuce, onion, pepper, corn, breast, lambleg, chickenleg, porkbelly, porkchop, chickenwing, wholemilk, soymilk, egg, yogurt, butter, acheese, scheese, cream) VALUES ('".$_SESSION['stock']['apple']."', '".$_SESSION['stock']['banana']."', '".$_SESSION['stock']['pear']."', '".$_SESSION['stock']['celery']."', '".$_SESSION['stock']['carrot']."', '".$_SESSION['stock']['broccoli']."', '".$_SESSION['stock']['ribeye']."', '".$_SESSION['stock']['salmon']."', '".$_SESSION['stock']['mango']."', '".$_SESSION['stock']['strawberry']."', '".$_SESSION['stock']['pineapple']."', '".$_SESSION['stock']['peach']."', '".$_SESSION['stock']['watermelon']."', '".$_SESSION['stock']['potato']."', '".$_SESSION['stock']['lettuce']."', '".$_SESSION['stock']['onion']."', '".$_SESSION['stock']['pepper']."', '".$_SESSION['stock']['corn']."', '".$_SESSION['stock']['breast']."', '".$_SESSION['stock']['lambleg']."', '".$_SESSION['stock']['chickenleg']."', '".$_SESSION['stock']['porkbelly']."', '".$_SESSION['stock']['porkchop']."', '".$_SESSION['stock']['chickenwing']."', '".$_SESSION['stock']['wholemilk']."', '".$_SESSION['stock']['soymilk']."', '".$_SESSION['stock']['egg']."', '".$_SESSION['stock']['yogurt']."', '".$_SESSION['stock']['butter']."', '".$_SESSION['stock']['acheese']."', '".$_SESSION['stock']['scheese']."', '".$_SESSION['stock']['cream']."') ";

		$results = mysqli_query($conn, $stockUpdate);
		if (!$results) {
			echo mysqli_error($conn);
		}

		$sql = "INSERT INTO transactions (username, apple, banana, pear, celery, carrot, broccoli, ribeye, salmon, mango, strawberry, pineapple, peach, watermelon, potato, lettuce, onion, pepper, corn, breast, lambleg, chickenleg, porkbelly, porkchop, chickenwing, wholemilk, soymilk, egg, yogurt, butter, acheese, scheese, cream) VALUES ('".$_SESSION['username']."', '".$_SESSION['products']['apple']."', '".$_SESSION['products']['banana']."', '".$_SESSION['products']['pear']."', '".$_SESSION['products']['celery']."', '".$_SESSION['products']['carrot']."', '".$_SESSION['products']['broccoli']."', '".$_SESSION['products']['ribeye']."', '".$_SESSION['products']['salmon']."', '".$_SESSION['products']['mango']."', '".$_SESSION['products']['strawberry']."', '".$_SESSION['products']['pineapple']."', '".$_SESSION['products']['peach']."', '".$_SESSION['products']['watermelon']."', '".$_SESSION['products']['potato']."', '".$_SESSION['products']['lettuce']."', '".$_SESSION['products']['onion']."', '".$_SESSION['products']['pepper']."', '".$_SESSION['products']['corn']."', '".$_SESSION['products']['breast']."', '".$_SESSION['products']['lambleg']."', '".$_SESSION['products']['chickenleg']."', '".$_SESSION['products']['porkbelly']."', '".$_SESSION['products']['porkchop']."', '".$_SESSION['products']['chickenwing']."', '".$_SESSION['products']['wholemilk']."', '".$_SESSION['products']['soymilk']."', '".$_SESSION['products']['egg']."', '".$_SESSION['products']['yogurt']."', '".$_SESSION['products']['butter']."', '".$_SESSION['products']['acheese']."', '".$_SESSION['products']['scheese']."', '".$_SESSION['products']['cream']."') ";
		$results = mysqli_query($conn, $sql);
		if (!$results) {
			echo mysqli_error($conn);
		}
		echo "<script>
			window.location.href='thankyoupage.html';
			</script>
		";
	}

 ?>


  
