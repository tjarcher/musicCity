<html>
<head>
</head>


<body>
<?php

include "dbConnect.php";



$sql = "SELECT courseID, topic, modality, creditValue, enrollmentLimit, teacherID FROM course";
$result = $conn->query($sql);

$numResults = $result->num_rows;

echo "<h2>We currently offer $numResults courses:</h2><br>";

for($i = 0; $i < $numResults; $i++) {
    $row = $result->fetch_assoc();
    $teacherID = $row["teacherID"];
    
    $sql2 = "SELECT firstName, lastName FROM employee WHERE employeeID = '$teacherID'";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
    
    
    echo "Course No. " . $row["courseID"]. ": ". $row["topic"] . " taught by " . $row2["firstName"] . " "  . $row2["lastName"] . ", offered for ". $row["creditValue"] . " credits in ". $row["modality"]. "<br><br>";
    
}

$conn->close();
?>

<a href="clientHome.php"><h3>Return Home</h3></a>