<!DOCTYPE html>
<head>
    <title>Form Data</title>
</head>
<body>
    <form method="POST" action="Lesson8_DataReceiver.php">
    <label for="txtFirstname">First Name</label>
    <input type="text" name="txtFirstname" id="txtFirstname" autofocus><br>
    <label for="txtLastname">Last Name</label>
    <input type="text" name="txtLastname" id="txtLastname"><br>

    <label for="radMale">Male</label>
    <input type="radio" name="radSex" id="radMale" value="Male" checked>
    <label for="radFemale">Female</label>
    <input type="radio" name="radSex" id="radFemale" value="Female"><br>

    <button type="submit" name="btnSend">Send</button>
    </form>



</body>
</html>