<html>
<head>
</head>


<body>
<?php

include "dbConnect.php";


$firstname = $_GET["firstName"];
$lastName = $_GET["lastName"];
$address = $_GET["address"];
$phoneNumber = $_GET["phoneNumber"];
$dateOfBirth = $_GET["dateOfBirth"];

$sql = "INSERT INTO employee (dateOfBirth, firstName, lastName, address, phoneNumber) VALUES('$dateOfBirth', '$firstname', '$lastName', '$address', '$phoneNumber')";


if ($conn->query($sql) === TRUE) {
  echo "<h1>Congratulations! New employee $firstname $lastName has been created!</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();
?>

<a href="employeeHome.php"><h3>Return Home</h3></a>