<html>
<head>
</head>


<body>
<?php

include "dbConnect.php";

$topic = $_GET["topic"];
$modality = $_GET["modality"];
$creditValue = $_GET["creditValue"];
$enrollmentLimit = $_GET["enrollmentLimit"];
$teacherID = $_GET["teacherID"];

$sql = "SELECT firstName, lastName FROM employee WHERE employeeID = '$teacherID'";
$result = $conn->query($sql);

$numResults = $result->num_rows;

if ($numResults > 0) {
    $sql2 = "INSERT INTO course (topic, modality, creditValue, enrollmentLimit, teacherID) VALUES('$topic', '$modality', '$creditValue', '$enrollmentLimit', '$teacherID')";
    if ($conn->query($sql2) === TRUE) {
    echo "<h1>Congratulations! New course $topic has been created!</h1>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "<h1>Sorry, there is no current employee with ID number $teacherID</h1>";
}

$conn->close();
?>

<a href="employeeHome.php"><h3>Return Home</h3></a>
    
