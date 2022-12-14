<!DOCTYPE HTML>
<html>
<head>
    <title> Home Page </title>
<h2 class="heading"> Welcome To The Admission of Yoga Class<h2>
<link rel="stylesheet" href="Style.css">
</head>

<body>
<img  class="img" src="yoga_image.jpg" alt="Yoga">
<form action="validate.php" method="post">
    UserName: <input type="text" name="name" id="name"><br>
    Date of Birth: <input type="date" name="dob" id="dob"><br>
    <label for="month">Choose a Month for Admission:</label>
    <select name="month" id="month">
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
    </select>
    <br>
    <label for="slot">Choose a Timing Slot:</label>
    <select name="slot" id="slot">
    <option value="6-7 AM">6-7 AM</option>
    <option value="7-8 AM">7-8 AM</option>
    <option value="8-9 AM">8-9 AM</option>
    <option value="5-6 PM">5-6 PM</option>
    </select>
    <br>


<input type="submit" value="Confirm Booking"><br>
</form>

</body>
</html>

