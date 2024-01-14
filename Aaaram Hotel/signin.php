<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/signinn.css">
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
</header>



    <main class="form-signin w-100 m-auto">
  <form id="main" action="customerDashboard.php" method="post">
    <img id="signinimg" src="images/login.png">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    
    <div id="email" class="form-floating">
      <input  name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <br>
    <div id="password" class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <div id="button">
    <button  class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    </div>
  </form>
</main>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>