<html>
<head>
</head>


<body>
<?php

include "dbConnect.php";

$username = $_GET["username"];
$courseID = $_GET["courseID"];
$rating = $_GET["rating"];
$review = $_GET["review"];


$sql = "SELECT firstName, lastName FROM client WHERE username = '$username'";
$result = $conn->query($sql);

$numResults = $result->num_rows;

if ($numResults < 1) {
    echo "<h1>Sorry, there is no current user with username $username</h1>";
} else {
    $sql2 = "SELECT topic FROM course WHERE courseID = '$courseID'";
    $result = $conn->query($sql2);

    $numResults = $result->num_rows;

    if ($numResults < 1) {
        echo "<h1>Sorry, there is no current course with course number $courseID</h1>";
    } else {
       $sql3 = "INSERT INTO feedback (courseID, clientUsername, rating, review) VALUES('$courseID', '$username', '$rating', '$review')";
        if ($conn->query($sql3) === TRUE) {
            echo "<h1>Thank you $username for your feedback, and thank you for choosing Music City!</h1>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } 
    }
}

$conn->close();
?>

<a href="clientHome.php"><h3>Return Home</h3></a>