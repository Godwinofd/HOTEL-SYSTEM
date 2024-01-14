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
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/checkout.css">
</head>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $checkInDate = isset($_POST["CheckInDate"]) ? $_POST["CheckInDate"] :"";
        $checkOutDate = isset($_POST["CheckOutDate"]) ? $_POST["CheckOutDate"] :"";
        $roomType = isset($_POST["RoomType"]) ? $_POST["RoomType"] :"";
        $numberOfGuests = isset($_POST["NumberOfGuests"]) ? $_POST["NumberOfGuests"] :"";

        if ($roomType == "Standard room") {
            echo "<div id='header'>";
            echo "<h1>Confirm Booking & Pay</h1>";
            echo "</div>";
            echo"<br>";
            echo "<div id='roomDetails'>";
            echo "<p> You have selected a Standard room.</p>";
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
            echo "<h1>Confirm Booking & Pay</h1>";
            echo "</div>";
            echo"<br>";
            echo "<div id='roomDetails'>";
            echo "<p> You have selected a Executive room.</p>";
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
            echo "<h1>Confirm Booking & Pay</h1>";
            echo "</div>";
            echo"<br>";
            echo "<div id='roomDetails'>";
            echo "<p> You have selected a Family room.</p>";
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
<body>
<div id="contain" class="container">
  <main>
    

    
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Sign up with you're details.</h4>
        <form action="processbooking.php" method="post" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" name="firstName" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" name="lastName" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
              <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Password</label>
              <br>
              <input type="Password" name="password" class="password" id="password" placeholder="Password" value="" required>
              <div class="invalid-feedback">
                Valid password is required.
              </div>
            </div>

            

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-body-secondary">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Confirm & Pay</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
</html>