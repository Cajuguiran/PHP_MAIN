<!DOCTYPE html>
<head>
   
    <title>INPUT TYPES DEMO</title>
</head>
<body>

<!-- Copy From W3Schools 
    
<input type="button"> <br>
<input type="checkbox"> <br>
<input type="color"> <br>
<input type="date"> <br>
<input type="datetime-local"> <br>
<input type="email"> <br>
<input type="file"> <br>
<input type="hidden"> <br>
<input type="image"> <br>
<input type="month"> <br>
<input type="number"> <br>
<input type="password"> <br>
<input type="radio"> <br>
<input type="range"> <br>
<input type="reset"> <br>
<input type="search"> <br>
<input type="submit"> <br>
<input type="tel"> <br>
<input type="text"> <br>
<input type="time"> <br>
<input type="url"> <br>
<input type="week"> <br>


checked =   Specifies that an input field should be pre-selected when the page loads (for type="checkbox" or type="radio")
disabled =  Specifies that an input field should be disabled
max =       Specifies  the maximum value for an input field
maxlength = Specifies the maximum number of character for an input field
min =       Specifies the minimum value for an input field
pattern =   Specifies a regular expression to check the input value against
readonly =  Specifies that an input field is read only (cannot be changed)
required =  Specifies that an input field is required (must be filled out)
size =      Specifies the width (in characters) of an input field
step =      Specifies the legal number intervals for an input field
value =     Specifies the default value for an input field

-->

<h1 align="center">DEMO IN VIDEO</h1>
<hr>
<form >
    <label for="txtFirstName">First Name:</label>
    <input type="text" name="txtFirstName" id="txtFirstName" placeholder="Enter first name" autofocus required><br>
    <label for="txtLastName">Last Name:</label> 
    <input type="text" name="txtLastName" id="txtLastName" placeholder="Enter last name" required><br>
    <label for="txtPassword">Password:</label>
    <input type="password" name="txtPassword" id="txtPassword" placeholder="Enter Password" required><br>

    <hr>
    <button type="submit">Send</button>  <!-- Or <input type="submit" name="btnSave" value="Send"> -->
    <button type="reset" name="">Reset</button>  <!-- Or <input type="reset"> -->

    <hr>
    <input type="radio" name="radSex" id="radMale" value="Male" checked>
    <label for="radMale">Male</label><br>
    <input type="radio" name="radSex " id="radFemale" value="Female">
    <label for="radFemale">Female</label><br>

    <hr>
    <input type="checkbox" name="chkBike" id="chkBike" value="Bike" checked>
    <label for="chkBike">I have a bike.</label><br>
    <input type="checkbox" name="chkMotor" id="chkMotor" value="Motor">
    <label for="chkMotor">I have a motor.</label><br>
    <input type="checkbox" name="chkCar" id="chkCar" value="Car">
    <label for="chkCar">I have a car.</label><br>

    <hr>
    <label for="clrTheme" id="clrTheme">Pick a Color</label>
    <input type="color" name="clrTheme">


    <hr>
    <label for="dtpBirthday" id="dtpBirthday">Birthday:</label>
    <input type="date" name="dtpBirthday" value="2022-01-01">


    <hr>
    <label for="txtEmail">Email:</label>
    <input type="email" name="txtEmail" id="txtEmail" placeholder="@gmail.com" > 

    <hr>
    <label for="filePhoto">Select a File:</label>
    <input type="file" name="filePhoto" id="filePhoto">

    <hr>
    <label for="txtNumber">Enter Price:</label>
    <input type="number" name="txtNumber" id="txtNumber" min="1" max="5">

    <hr>
    <label for="txtVolume">Select Volume:</label>
    <input type="range" name="txtVolume" id="txtVolume" min="0" max="100" step="10">

    <hr>
    <label for="txtTelephone">Enter Telephone:</label>
    <input type="tel" name="txtTelephone" id="txtTelephone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" maxlength="10">

    <hr>
    <label for="txtTime">Enter  a Time:</label>
    <input type="time" name="txtTime" id="txtTime">

    <hr>
    <label for="txtURL">Add URL:</label>
    <input type="url" name="txtURL" id="txtURL" value="URL" size="50" readonly>
</form>


</body>
</html>