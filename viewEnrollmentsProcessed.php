<html>
<head>
</head>


<body>
<?php

include "dbConnect.php";

$username = $_GET["username"];


$sql = "SELECT firstName, lastName, creditsCompleted FROM client WHERE username = '$username'";
$result = $conn->query($sql);

$numResults = $result->num_rows;
$row = $result->fetch_assoc();
    
$creditsCompleted = $row['creditsCompleted'];

if ($numResults < 1) {
    echo "<h1>Sorry, there is no current user with username $username</h1>";
} else {
        $sql2 = "SELECT sectionID, status FROM enrollment WHERE clientUsername = '$username'";
        $result2 = $conn->query($sql2);

        $numResults2 = $result2->num_rows;

        if ($numResults2 < 1) {
            echo "<h1>Sorry, $username is not enrolled in any courses.</h1>";
        } else {
            echo "<h1>$username's enrollments:<br><br></h1>";
            for($i = 0; $i < $numResults2; $i++) {
                $row2 = $result2->fetch_assoc();
    
                $sectionID = $row2['sectionID'];
                $status = $row2['status'];
                $sql3 = "SELECT courseID FROM section WHERE sectionID = '$sectionID'";
                $result3 = $conn->query($sql3);
                
                $row3 = $result3->fetch_assoc();
            
                $courseID = $row3['courseID'];
                $sql4 = "SELECT topic FROM course WHERE  courseID = '$courseID'";
                $result4 = $conn->query($sql4);
                
                $row4 = $result4->fetch_assoc();
                $topic = $row4['topic'];
                
                echo "<h2>$topic Section $sectionID: $status<br><br></h2>";
    
            }
            echo "<h2>$username has completed $creditsCompleted credits</h2><br>";
        }
}

$conn->close();
?>

<a href="clientHome.php"><h3>Return Home</h3></a>
