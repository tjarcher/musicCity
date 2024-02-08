<html>
<head>
    <title>Provide Feedback</title>
</head>
<body>

<h1>Thank you for choosing to provide feedback on one of our courses<br>Please enter your feedback below:</h1>
<form action="feedbackProcessed.php">
        
        User ID:<br><input type="text" name="username" id="username" required autofocus><br>
        Class's Course ID:<br><input type="text" name="courseID" id="courseID" required ><br>
        Rating:<br> 	<select name="rating" required>
				        <option disabled selected value="">--</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
		            </select><br>
        Review:<br><input type="text" name="review" id="review" size="100" required ><br>
                   
        <input type="submit" value="Submit">
    </form>