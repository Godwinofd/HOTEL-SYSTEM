<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Extract form data
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    // Check if email and password are provided
    if (!empty($email) && !empty($password)) {

        // Query to check if the user with the provided email exists
        $sql = "SELECT * FROM customer WHERE Email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User with the provided email found

            // Fetch user data
            $row = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $row["PasswordHash"])) {
                // Password is correct

                // Fetch booking details
                $bookingSql = "SELECT * FROM reservation WHERE UserID = '{$row["UserID"]}'";
                $bookingResult = $conn->query($bookingSql);

                if ($bookingResult->num_rows > 0) {
                    // Booking details found

                    // Fetch room and dates information
                    $bookingRow = $bookingResult->fetch_assoc();
                    $room = $bookingRow["RoomName"];
                    $checkInDate = $bookingRow["CheckInDate"];
                    $checkOutDate = $bookingRow["CheckOutDate"];

                    // Display personalized greeting and booking information
                    $greeting = "Hello, " . $row["Name"] . "!";
                    echo $greeting . "<br>";
                    echo "Booking room: $room<br>";
                    echo "Dates: $checkInDate to $checkOutDate";

                    // You can now do further processing or redirect the user
                    echo "Login successful!";
                } else {
                    // No booking found for the user
                    echo "No booking found for the user";
                }
            } else {
                // Password is incorrect
                echo "Invalid password";
            }
        } else {
            // User with the provided email not found
            echo "User not found";
        }
    } else {
        // Email or password not provided
        echo "Please provide both email and password";
    }
}

// Close the connection
$conn->close();
?>




