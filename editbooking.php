<!--Assumed customers will also have 
landlines so pattern adjusted to accomodate.

h3 for booking for test removed.
Dummy data entered for testing.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a booking</title>
</head>
<body>
    <h1>Edit a booking</h1>
    <h2>
        <a href="currentbooking.html">[Return to the Bookings listing]</a>
        <a href="">[Return to the main page]</a>
    </h2>
    <form action="" method="get">
        <p>
            <label for="Room">Room (name,type,beds):</label>
            <select name="roomDrop" id="roomDrop">
                <option value="Kellie,S,5">Kellie,S,5 </option>
                <option value="Herman,D,2">Herman,D,2</option>
            </select>
        </p>
        <p>
            <label for="Checkin date">Checkin date:</label>
            <input type="text" id="checkIn" placeholder="yyyy-mm-dd" required/>
        </p>
        <p>
            <label for="Checkout date">Checkout date:</label>
            <input type="text" id="checkOut" placeholder="yyyy-mm-dd" required/>
        </p>
        <p>
            <label for="Contact number">Contact number:</label>
            <input type="text" pattern="[\(]\d{0-3}[\)]\d{3}\d{4-9}" placeholder="(###) ### ####" required
            oninvalid="this.setCustomValidity('Please use format (###) ### ####')"
            oninput="this.setCustomValidity('')"/>
        </p>
        <p>
            <label for="Extras">Booking extras:</label>
            <textarea rows="5" cols="30"></textarea>
        </p>
        <button type="submit" name="submit" value="Update">Update</button>
        <a href="currentbooking.html">[Cancel]</a>
    </form>
</body>
</html>