<html>
<head>
</head>


<body>
<?php

include "dbConnect.php";

$courseID = $_GET["courseID"];
$sql = "SELECT clientUsername, rating, review FROM feedback WHERE courseID = '$courseID'";

$result = $conn->query($sql);

$numResults = $result->num_rows;


if ($numResults > 0) {
    $sql2 = "SELECT topic FROM course WHERE courseID = '$courseID'";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
    $topic = $row2['topic'];
    echo "<h1>Here are the reviews for $topic:</h1><br>";
    
    for($i = 0; $i < $numResults; $i++) {
        $row = $result->fetch_assoc();
        $username = $row["clientUsername"];
        $rating = $row["rating"];
        $review = $row["review"];
        echo '<h2>'.$username.': '.$rating.'/5 - "'.$review.'"<br><br></h2>';
    
    }
} else {
    echo "<h2>Sorry, there is currently no feedback for course number $courseID.<h2>";
}

$conn->close();
?>

<a href="clientHome.php"><h3>Return Home</h3></a>