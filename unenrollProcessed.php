<html>
<head>
</head>


<body>
<?php

include "dbConnect.php";

$username = $_GET["username"];
$sectionID = $_GET["sectionID"];


$sql = "SELECT status FROM enrollment WHERE clientUsername = '$username' AND sectionID = '$sectionID'";
$result = $conn->query($sql);

$numResults = $result->num_rows;

if ($numResults > 0) {
    $sql3 = "DELETE FROM enrollment WHERE clientUsername = '$username' AND sectionID = '$sectionID'";
        if ($conn->query($sql3) === TRUE) {
            echo "<h1>We are sorry to see you go, and hope to learn with you again soon!</h1>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
    } 
} else {
     echo "<h1>Sorry, there is no current user with username $username enrolled in the class with section number $sectionID</h1>";  
}

$conn->close();
?>

<a href="clientHome.php"><h3>Return Home</h3></a>
    
