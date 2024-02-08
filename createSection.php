<html>
<head>
    <title>Create Section</title>
</head>
<body>

<h1>Please enter information about the section you would like to create:</h1>
<form action="createSectionProcessed.php">
        
        Course ID:<br><input type="text" name="courseID" id="courseID" required autofocus><br>
        Year:<br><input type="text" name="year" id="year" required ><br>
        Season:<br> 	<select name="season" required>
				        <option disabled selected value="">--</option>
				        <option value="winter">Winter</option>
				        <option value="spring">Spring</option>
				        <option value="summer">Summer</option>
                        <option value="fall">Fall</option>
		            </select><br>
        <input type="submit" value="Submit">
    </form>