<html>
<head>
    <title>Create Course</title>
</head>
<body>

<h1>Please enter information about the course you would like to create:</h1>
<form action="createCourseProcessed.php">
        
        Topic:<br><input type="text" name="topic" id="topic" required autofocus><br>
        Modality:<br><input type="text" name="modality" id="modality" required ><br>
        Credit Value:<br><input type="text" name="creditValue" id="creditValue" required><br>
        Enrollment Limit:<br><input type="text" name="enrollmentLimit" id="enrollmentLimit" required ><br>
        Teacher ID:<br><input type="text" name="teacherID" id="teacherID" required ><br>            
        <input type="submit" value="Submit">
    </form>