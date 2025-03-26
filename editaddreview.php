<!--Showing room details but only review box is available to edit-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit/add room review</title>
</head>
<body>
    <h1>Edit/add room review</h1>
    <h2>
        <a href="currentbooking.html">[Return to the Bookings listing]</a>
        <a href="">[Return to the main page]</a>
    </h2>
    <fieldset>
        <legend>Room detail #2</legend>
        <dl>
            <dt>Room name:</dt>
            <dd>Kellie</dd>
            <dt>Checkin date:</dt>
            <dd>2018-09-15</dd>
            <dt>Checkout date:</dt>
            <dd>2018-09-19</dd>
            <dt>Contact number:</dt>
            <dd>(001) 123 1234</dd>
            <dt>Extras:</dt>
            <dd>nothing</dd>
        </dl>
    </fieldset>
    <br>
    <form action="" method="get">
        <label for="Review">Room review:</label>
        <textarea rows="5" cols="30"></textarea>
    </form>
    <br>
    <button type="submit" name="submit" value="Update">Update</button>
</body>
</html>