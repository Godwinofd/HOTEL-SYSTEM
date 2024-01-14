<?php
// Check if the form is submitted

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

    
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Extract form data
    $firstName = isset($_POST["firstName"]) ?  $_POST["firstName"]:"";
    $lastName = isset($_POST["lastName"]) ? $_POST["lastName"]:"";
    $username = isset($_POST["username"]) ? $_POST["username"]:"";
    $email = isset($_POST["email"]) ? $_POST["email"]:"";
    $password = isset($_POST["password"]) ? password_hash($_POST["password"], PASSWORD_BCRYPT):""; // Hash the password

    // Insert data into the 'customer' table
    $sql = "INSERT INTO customer (Name, Lastname, UserID, Username, Email, PasswordHash) VALUES ('$firstName', '$lastName', '$username', '$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for choosing Aaram Hotel ".$firstName." "."you're booking has been confirmed!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
   
}
?>
