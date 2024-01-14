<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/booking.css">
</head>
<body>
    <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="http://localhost/Aaaram%20Hotel/index.html">Home</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="http://localhost/Aaaram%20Hotel/signin.php">Sign in</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="http://localhost/Aaaram%20Hotel/booking.php">Book</a>
        <a class="py-2 link-body-emphasis text-decoration-none" href="http://localhost/Aaaram%20Hotel/aboutus.php">About us</a>
      </nav>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis">Book here</h1>
      <br><br>
      <p class="fs-5 text-body-secondary">Here at Aaram Hotel we believe that every stay mattars.</p>
    </div>
  </header>

<div id="roomOptions">
    <div id="roomOptions">
        <img id="standardRoomImg" src="images/standard.webp">
        <br>
    </div>

    <div id="roomOptions">
        <img id="familyRoomImg" src="images/family.webp">
    </div>

    <div id="roomOptions">
        <img id="executiveRoomImg" src="images/executive.jpg">
    </div>
</div>

 <div id="standardBook" class="col">
    <div id="standardBook" class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Standard room</h4>
        </div>
        <div class="card-body">
            <h1 id="standardRoomLabel" class="card-title pricing-card-title">£69<small class="text-body-secondary fw-light">-including vat.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li>The Standard Room offers a comfortable and cozy retreat perfect for solo travelers.</li>
            </ul>
            <form action="checkout.php"  method="post">
                <label for="CheckInDate">Check-in Date:</label>
                <input type="date" id="CheckInDate" name="CheckInDate" required>
                <br><br>
                <label for="CheckOutDate">Check-out Date:</label>
                <input type="date" id="CheckOutDate" name="CheckOutDate" required>
                <br><br>
                <label for="RoomType">Room Type:</label>
                <select id="RoomType" name="RoomType" required>
                    <option value="Standard room">Standard Room</option>
                </select>
                <br><br>
                <label for="NumberOfGuests">Number of Guests:</label>
                <input type="number" id="NumberOfGuests" name="NumberOfGuests" min="1" required>
                <br><br>
                <input type="submit" value="Book" class="w-100 btn btn-lg btn-primary"></input>
</form>
            
        </div>
      </div>


      <div id="familyBook" class="col">
        <div id="familyBook" class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Family room</h4>
          </div>
          <div class="card-body">
            <h1 id="standardRoomLabel" class="card-title pricing-card-title">£99<small class="text-body-secondary fw-light">-including vat.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Spacious and comfortable family room,perfect for a relaxing stay with loved ones.</li>
              
            </ul>
            <form action="checkout.php"  method="post">
                <label for="CheckInDate">Check-in Date:</label>
                <input type="date" id="CheckInDate" name="CheckInDate" required>
                <br><br>
                <label for="CheckOutDate">Check-out Date:</label>
                <input type="date" id="CheckOutDate" name="CheckOutDate" required>
                <br><br>
                <label for="RoomType">Room Type:</label>
                <select id="RoomType" name="RoomType" required>
                    <option value="Family room">Family Room</option>
                </select>
                <br><br>
                <label for="NumberOfGuests">Number of Guests:</label>
                <input type="number" id="NumberOfGuests" name="NumberOfGuests" min="1" required>
                <br><br>
                <input type="submit" value="Book" class="w-100 btn btn-lg btn-primary"></input>
</form>
            
        </div>
      </div>

      <div id="executiveBook" class="col">
        <div id="executiveBook" class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Executive room</h4>
          </div>
          <div class="card-body">
            <h1 id="standardRoomLabel" class="card-title pricing-card-title">£139<small class="text-body-secondary fw-light">-including vat.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Elegant and luxurious executive room, offering a premium experience for business or leisure travelers. </li>
            </ul>
            <form action="checkout.php"  method="post">
                <label for="CheckInDate">Check-in Date:</label>
                <input type="date" id="CheckInDate" name="CheckInDate" required>
                <br><br>
                <label for="CheckOutDate">Check-out Date:</label>
                <input type="date" id="CheckOutDate" name="CheckOutDate" required>
                <br><br>
                <label for="RoomType">Room Type:</label>
                <select id="RoomType" name="RoomType" required>
                    <option value="Executive room">Executive Room</option>
                </select>
                <br><br>
                <label for="NumberOfGuests">Number of Guests:</label>
                <input type="number" id="NumberOfGuests" name="NumberOfGuests" min="1" required>
                <br><br>
                <input type="submit" value="Book" class="w-100 btn btn-lg btn-primary"></input>
</form>
            
        </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>