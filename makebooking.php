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
    <title>Make a booking</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
    <h1>Make a booking</h1>
    <h2>
        <a href="currentbooking.html">[Return to the Bookings listing]</a>
        <a href="index.php">[Return to the main page]</a>
    </h2>
    <form action="" method="get">
        <p>
            <label for="Room">Room (name, type, beds):</label>
            <select name="roomDrop" id="roomDrop">
                <option value="Kellie,S,5">Kellie,S,5 </option>
                <option value="Herman,D,2">Herman,D,2</option>
            </select>
        </p>
        <p>
            <label for="Checkin Date">Checkin date:</label>
            <input type="text" id="checkIn" placeholder="yyyy-mm-dd" required/>
        </p>
        <p>
            <label for="Checkout date">Checkout date:</label>
            <input type="text" id="checkOut" placeholder="yyyy-mm-dd" required/>
        </p>
        <p>
            <label for="Contact number">Contact number:</label>
            <input type="text" pattern="[\(]\d{0-3}[\)]\d{3}\d{4}" placeholder="(###) ### ####" required
            oninvalid="this.setCustomValidity('Please use format (###) ### ####')"
            oninput="this.setCustomValidity('')"/>
        </p>
        <p>
            <label for="Extras">Booking extras:</label>
            <textarea rows="5" cols="30"></textarea>
        </p>
        <button type="submit" name="submit" id="addBooking" value="Add">Add</button>
        <a href="currentbooking.html">[Cancel]</a>
    </form>
    <br>
    <hr>
    <h3>Search for room availability</h3>
    <form action="" method="get">
        <label for="Start date">Start date:</label>
        <input type="text" id="startDate">
        <label for="End date">End date:</label>
        <input type="text" id="endDate">
        <input type="submit" value="Search Availability"
        onclick="searchRoom()">
    </form>
    <br>
    <table id="result" border="1"></table>
</body>
<script>
    $(function () {
        var dateFormat = "yy/mm/dd",
            checkIn = $("#checkIn").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 2,
                minDate: 0,
                dateFormat: "yy/mm/dd"
            })
                .on("change", function () {
                    checkOut.datepicker("option", "minDate", getDate(this));
                }),
            checkOut = $("#checkOut").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 2,
                dateFormat: "yy/mm/dd"

            })
                .on("change", function () {
                    checkIn.datepicker("option", "maxDate", getDate(this));
                });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }
            return date;
        }
    });

    $(document).ready(function(){
        $("#startDate").datepicker({dateFormat:"dd/mm/yy"});
        $("#endDate").datepicker({dateFormat:"dd/mm/yy"});
    });

    function searchRoom(){
        var startDate = $("#startDate").val();
        var endDate = $("#endDate").val();

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $("#result").html(this.responseText);
            }
        }

        xhttp.open("GET", "filter.php?startDate=" + startDate +
            "&endDate=" + endDate, true);
            xhttp.send();
    }

</script>

</html>