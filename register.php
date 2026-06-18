<?php
include('config.php'); // database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if ($password !== $confirm) {
        echo "<script>alert('Passwords do not match!'); window.location.href='register.php';</script>";
        exit;
    }

    $check = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Email already registered!'); window.location.href='login.php';</script>";
        exit;
    }

    $query = "INSERT INTO users (name, email, phoneNo, password, role) VALUES ('$name', '$email', '$phone', '$password', 'customer')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registration successful! Please login.'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Error during registration!'); window.location.href='register.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Now</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="CSS/Customer.css">

  <style>
    body {
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                  url('Assets/Hotel.avif');
      background-size: cover;
      background-position: center;
      height: 100vh;
    }
    .glass-card {
      background: rgba(255,255,255,0.9);
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0px 10px 30px rgba(0,0,0,0.3);
    }
    .btn-gold {
      background-color: #A67C52;
      color: white;
      font-weight: bold;
    }
    .btn-gold:hover {
      background-color: #8B6B43;
    }
  </style>
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center h-100">
    <div class="col-md-5">
      <div class="glass-card">
        <h2 class="text-center fw-bold mb-4" style="color:#030339">Create Account</h2>

        <form action="register.php" method="POST">
          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-person"></i></span>
            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
          </div>

          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
            <input type="tel" name="phone" class="form-control" placeholder="Phone No." required>
          </div>

          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
          </div>

          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>

          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
            <input type="password" name="confirm" class="form-control" placeholder="Confirm Password" required>
          </div>

          <button type="submit" class="btn btn-gold w-100 py-2">Register</button>
        </form>

        <p class="text-center mt-3 mb-0">
          Already have an account? <a href="login.php" style="color:#020243">Login</a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
