<html>
<head>
  <title>
    Testing Login.
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
  $sql = "INSERT INTO uid (username, password) VALUES ('$username', '$password')";
  $results = mysqli_query($conn, $sql);
  if ($results) {
    echo "The user has been added.";
  } else {
    echo mysqli_error($conn);
  }
  mysqli_close($conn);
  ?>
</body>
</html>
