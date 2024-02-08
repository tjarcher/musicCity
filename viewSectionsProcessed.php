<html>
<head>
</head>


<body>
<?php

include "dbConnect.php";

$courseID = $_GET["courseID"];
$sql = "SELECT sectionID, year, season FROM section WHERE courseID = '$courseID'";

$result = $conn->query($sql);

$numResults = $result->num_rows;


if ($numResults > 0) {
    $sql2 = "SELECT topic FROM course WHERE courseID = '$courseID'";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
    $topic = $row2['topic'];
    echo "<h2>We currently offer $numResults sections of $topic:</h2><br>";
    for($i = 0; $i < $numResults; $i++) {
        $row = $result->fetch_assoc();
    
        echo "Section " . $row["sectionID"]. ": ". $row["season"] . " ". $row["year"] . "<br><br>";
    
    }
} else {
    echo "<h2>Sorry, there are currently no sections with course number $courseID<h2>";
}

$conn->close();
?>

<a href="clientHome.php"><h3>Return Home</h3></a>