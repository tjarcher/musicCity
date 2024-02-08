<html>
<head>
</head>


<body>
<?php

include "dbConnect.php";

$username = $_GET["username"];
$sectionID = $_GET["sectionID"];


$sql = "SELECT firstName, lastName FROM client WHERE username = '$username'";
$result = $conn->query($sql);

$numResults = $result->num_rows;

if ($numResults < 1) {
    echo "<h1>Sorry, there is no current user with username $username</h1>";
} else {
    $sql2 = "SELECT year FROM section WHERE sectionID = '$sectionID'";
    $result = $conn->query($sql2);

    $numResults = $result->num_rows;

    if ($numResults < 1) {
        echo "<h1>Sorry, there is no current class with section number $sectionID</h1>";
    } else {
       $sql3 = "INSERT INTO enrollment (sectionID, clientUsername) VALUES('$sectionID', '$username')";
        if ($conn->query($sql3) === TRUE) {
            echo "<h1>Congratulations! $username has been enrolled in section $sectionID!</h1>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } 
    }
}

$conn->close();
?>

<a href="clientHome.php"><h3>Return Home</h3></a>
    
