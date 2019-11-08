<html>
<head>
	<title>
		Login
	</title>
</head>
<body>
<?php
 	$username = $_POST['username'];
	$password = $_POST['password'];
	$conn = mysqli_connect("localhost", "root", "", "dbtest");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if (empty($username)) {
		echo "<script>
			alert('Please enter an username.');
			window.location.href='signup.html';
			</script>";
		exit;
	}
	else if (empty($password)) {
		echo "<script>
			alert('Please enter a password.');
			window.location.href='signup.html';
			</script>";
		exit;
	}
	$sql = "SELECT * FROM uid WHERE username='$username' AND password='$password'";
	$results = mysqli_query($conn, $sql);
  	if (mysqli_num_rows($results) == 1) {
		echo "<script>
			alert('Successfully logged in.');
			window.location.href='Products.html';
			</script>";
		exit;
  	} else {
		echo "<script>
			alert('The username/password does not match.');
			window.location.href='signup.html';
			</script>";
		exit;
  	}
	mysqli_close($conn);
 ?>
</body>
</html>
