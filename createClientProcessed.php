<html>
<head>
</head>


<body>
<?php

include "dbConnect.php";

$username = $_GET["username"];
$firstname = $_GET["firstName"];
$lastName = $_GET["lastName"];
$address = $_GET["address"];
$motivation = $_GET["motivation"];

$sql = "INSERT INTO client (username, firstName, lastName, address, motivation) VALUES('$username', '$firstname', '$lastName', '$address', '$motivation')";


if ($conn->query($sql) === TRUE) {
  echo "<h1>Congratulations! New user $username has been created!</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();
?>

<a href="clientHome.php"><h3>Return Home</h3></a>
