<html>
<head>
</head>

<body>

<?php
// Variables for database connection
$servername = "localhost";
$username = "archert1_joeEmployee";
$password = "FOODbeaver100!";
$database = "archert1_musicCity";

// Database connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
<br>
</body>

</html>