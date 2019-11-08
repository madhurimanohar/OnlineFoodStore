<html>
<head>
	<title>
		Sign Up
	</title>
</head>
<body>
<?php
 	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
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
	else if (empty($repassword)) {
		echo "<script>
			alert('Please re-enter your password.');
			window.location.href='signup.html';
			</script>";
			exit;
	}
	if ($password != $repassword) {
		echo "<script>
			alert('The password does not match.');
			window.location.href='signup.html';
			</script>";
		exit;
	}
	else {
		$conn = mysqli_connect("localhost", "root", "", "dbtest");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$user_check_query = "SELECT * FROM uid WHERE username='$username' LIMIT 1";
 		$result = mysqli_query($conn, $user_check_query);
 		$user = mysqli_fetch_assoc($result);
		if ($user) {
			if ($user['username'] === $username) {
				echo "<script>
					alert('The username is already taken.');
					window.location.href='signup.html';
					</script>";
				exit;
			}
		}
		$sql = "INSERT INTO uid (username, password) VALUES ('$username', '$password')";
		$results = mysqli_query($conn, $sql);
		if ($results) {
			echo "<script>
				alert('Your account has been created.');
				window.location.href='Products.html';
				</script>";
		} else {
			echo mysqli_error($conn);
		}
		mysqli_close($conn);
	}
 ?>
</body>
</html>
