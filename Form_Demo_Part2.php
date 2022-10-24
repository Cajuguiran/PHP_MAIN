<!DOCTYPE html>
<head>
    <title>Form Demo Action Part2</title>
</head>
<body>

    <h1>Form Demo Action Part2</h1>
    <input type="" name=""> <!-- This is Textbox -->

    <hr>
    <select name="drpCars" size="8" multiple> <!-- This is Dropdown List with Size, Multiple Select -->
        <option value="Ford" selected>Ford</option>
        <option value="Isuzu">Isuzu</option>
        <option value="Toyota">Toyota</option>
        <option value="BMW">Honda</option>
        <option value="BMW">Suzuki</option>
        <option value="BMW">Yamaha</option>
        <option value="BMW">Mitsubishi</option>
        <option value="Nissan" >Nissan</option>
    </select>

    <hr>
    <select name="drpCars" > <!-- This is Dropdown List Only -->
        <option value="Ford">Ford</option>
        <option value="Isuzu">Isuzu</option>
        <option value="Toyota">Toyota</option>
        <option value="BMW" selected>Honda</option>
        <option value="BMW">Suzuki</option>
        <option value="BMW">Yamaha</option>
        <option value="BMW">Mitsubishi</option>
        <option value="Nissan">Nissan</option>
    </select>

    <hr>
    <textarea name="txtPost" id="" cols="50" rows="20">Cajuguiran, Jhon Patrick Q.</textarea>

    <hr>
    <button type="button">Click Me!</button> <!-- This is Button -->

    <hr>
    <fieldset>
        <legend>Personal Info:</legend>
        First Name<input type="" name=""> <br>
        Last Name<input type="" name=""> <br>
    </fieldset>

    <hr>
    <input type="text" name="dlstBrowsers" list="browsers">
    <datalist id="browsers">
        <option value="Chrome">
        <option value="Opera">
        <option value="Safari">
        <option value="Firefox">
        <option value="Edge">        
</body>
</html>