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
    $sql3 = "UPDATE enrollment SET status = 'Completed' WHERE clientUsername = '$username' AND sectionID = '$sectionID'";
        if ($conn->query($sql3) === TRUE) {
            $sql4 = "SELECT courseID FROM section WHERE sectionID = '$sectionID'";
            $result4 = $conn->query($sql4);
            
            $row4 = $result4->fetch_assoc();
            $courseID = $row4['courseID'];
            
            $sql5 = "SELECT creditValue FROM course WHERE courseID = '$courseID'";
            $result5 = $conn->query($sql5);
            
            $row5 = $result5->fetch_assoc();
            $creditValue = $row5['creditValue'];
            
            $sql6 = "SELECT creditsCompleted FROM client WHERE username = '$username'";
            $result6 = $conn->query($sql6);
            
            $row6 = $result6->fetch_assoc();
            $credits = $row6['creditsCompleted'];
            
            $credits = $credits + $creditValue;
            $sql7 = "UPDATE client SET creditsCompleted = '$credits' WHERE username = '$username'";
            $result7 = $conn->query($sql7);
            
            echo "<h1>Congratulations to $username for completing class $sectionID and receiving $creditValue credits!</h1>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
    } 
} else {
     echo "<h1>Sorry, there is no current user with username $username enrolled in the class with section number $sectionID</h1>";  
}

$conn->close();
?>

<a href="employeeHome.php"><h3>Return Home</h3></a>
    