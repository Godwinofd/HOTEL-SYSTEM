<?php
$servername = "localhost";  // Usually "localhost"
$username = "root";
$password = "";
$dbname = "hotel_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Availability</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/available.css" rel="stylesheet">
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $checkInDate = isset($_POST["CheckInDate"]) ? $_POST["CheckInDate"] :"";
        $checkOutDate = isset($_POST["CheckOutDate"]) ? $_POST["CheckOutDate"] :"";
        $roomType = isset($_POST["RoomType"]) ? $_POST["RoomType"] :"";
        $numberOfGuests = isset($_POST["NumberOfGuests"]) ? $_POST["NumberOfGuests"] :"";

        if ($roomType == "Standard room") {
            echo "<div id='header'>";
            echo "<h1>Booking Availability</h1>";
            echo "</div>";
            echo"<br>";
            echo "<div id='roomDetails'>";
            echo "<p> You have selected a Standard room.</p>";
            echo "</div>";
            echo "<div id='roomImg'>";
            $standardRoomImg = 'images/standard.webp';
            echo "<img id='standardRoomImg' src='$standardRoomImg' alt='Standard Room Image'>";
            echo "</div>";
            echo "<div>";

            echo"<br>";

            echo "<div id='dates'>";
            $checkInDate = date("F j, ",strtotime($checkInDate));
            $checkOutDate = date("F j, Y",strtotime($checkOutDate));
            echo"Dates you have chose: ".$checkInDate." - ".$checkOutDate;
            echo"<br>";
            echo"<br>";
            echo "Number of Guests: ".$numberOfGuests;
            echo "</div>";
            echo "<br>";
            echo "<div id='roomAvailabillity'>";
            $sql = "SELECT COUNT(*) AS AvailableStandardRooms FROM room WHERE Availability = 1 AND RoomTypeID='Standard'";
            $result = $conn->query($sql);
            if ($result) {
                $row = $result->fetch_assoc();
                $availableStandardRooms = $row['AvailableStandardRooms'];
                if($availableStandardRooms > 0){
                    echo "<p>There are $availableStandardRooms standard rooms available for this booking.</p>";
                } else {
                    echo "<p>Sorry, there are no standard rooms available at the moment.</p>";
                }
            } else {
                echo "Error: " . $conn->error;
            }
        }
            
            echo "</div>";
    }



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if ($roomType == "Executive room") {
            echo "<div id='header'>";
            echo "<h1>Booking Availability</h1>";
            echo "</div>";
            echo"<br>";
            echo "<div id='roomDetails'>";
            echo "<p> You have selected a Executive room.</p>";
            echo "</div>";
            echo "<div id='roomImg'>";
            $executiveRoomImg = 'images/executive.jpg';
            echo "<img id='executiveRoomImg' src='$executiveRoomImg' alt='Executive Room Image'>";
            echo "</div>";
            echo "<div>";

            echo"<br>";

            echo "<div id='dates'>";
            $checkInDate = date("F j, ",strtotime($checkInDate));
            $checkOutDate = date("F j, Y",strtotime($checkOutDate));
            echo"Dates you have chose: ".$checkInDate." - ".$checkOutDate;
            echo"<br>";
            echo"<br>";
            echo "Number of Guests: ".$numberOfGuests;
            echo "</div>";
            echo "<br>";
            echo "<div id='roomAvailabillity'>";
            $sql = "SELECT COUNT(*) AS AvailableExecutiveRooms FROM room WHERE Availability = 1 AND RoomTypeID='Executive'";
            $result = $conn->query($sql);
            if ($result) {
                $row = $result->fetch_assoc();
                $availableExecutiveRooms = $row['AvailableExecutiveRooms'];
                if($availableExecutiveRooms > 0){
                    echo "<p>There are $availableExecutiveRooms Executive rooms available for this booking.</p>";
                } else {
                    echo "<p>Sorry, there are no Executive rooms available at the moment.</p>";
                }
            } else {
                echo "Error: " . $conn->error;
            }
        }
            
            echo "</div>";
    }



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if ($roomType == "Family room") {
            echo "<div id='header'>";
            echo "<h1>Booking Availability</h1>";
            echo "</div>";
            echo"<br>";
            echo "<div id='roomDetails'>";
            echo "<p> You have selected a Family room.</p>";
            echo "</div>";
            echo "<div id='roomImg'>";
            $familyRoomImg = 'images/family.webp';
            echo "<img id='familyRoomImg' src='$familyRoomImg' alt='Family Room Image'>";
            echo "</div>";
            echo "<div>";

            echo"<br>";

            echo "<div id='dates'>";
            $checkInDate = date("F j, ",strtotime($checkInDate));
            $checkOutDate = date("F j, Y",strtotime($checkOutDate));
            echo"Dates you have chose: ".$checkInDate." - ".$checkOutDate;
            echo"<br>";
            echo"<br>";
            echo "Number of Guests: ".$numberOfGuests;
            echo "</div>";
            echo "<br>";
            echo "<div id='roomAvailabillity'>";
            $sql = "SELECT COUNT(*) AS AvailableFamilyRooms FROM room WHERE Availability = 1 AND RoomTypeID='Family'";
            $result = $conn->query($sql);
            if ($result) {
                $row = $result->fetch_assoc();
                $availableFamilyRooms = $row['AvailableFamilyRooms'];
                if($availableFamilyRooms > 0){
                    echo "<p>There are $availableFamilyRooms Family rooms available for this booking.</p>";
                } else {
                    echo "<p>Sorry, there are no Family rooms available at the moment.</p>";
                }
            } else {
                echo "Error: " . $conn->error;
            }
        }
            
            echo "</div>";
    }

    ?>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>         
    </body>
</html>
