<html>
<head>
</head>


<body>
<?php

include "dbConnect.php";

$courseID = $_GET["courseID"];
$year = $_GET["year"];
$season = $_GET["season"];


$sql = "SELECT topic FROM course WHERE courseID = '$courseID'";
$result = $conn->query($sql);

$numResults = $result->num_rows;

if ($numResults > 0) {
    $sql2 = "INSERT INTO section (courseID, year, season) VALUES('$courseID', '$year', '$season')";
    if ($conn->query($sql2) === TRUE) {
    echo "<h1>Congratulations! New section has been created!</h1>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "<h1>Sorry, there is no current course with ID number $courseID</h1>";
}

$conn->close();
?>

<a href="employeeHome.php"><h3>Return Home</h3></a>
    
