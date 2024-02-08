<html>
<head>
    <title>Create Client</title>
</head>
<body>

<h1>Please enter information about the new employee:</h1>
<form action="createEmployeeProcessed.php">
        
        First Name:<br><input type="text" name="firstName" id="firstName" required autofocus><br>
        Last Name:<br><input type="text" name="lastName" id="lastName" required><br>
        Address:<br><input type="text" name="address" id="address" required ><br>
        Phone Number:<br><input type="text" name="phoneNumber" id="phoneNumber" required ><br>
        Date of Birth: <br><input type="date" name="dateOfBirth" id="dateOfBirth" required ><br>
        <input type="submit" value="Submit">
    </form>