<?php
session_start();
include('config.php'); // database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];



    $query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    // FIXED PASSWORD CHECK
    if (trim($password) == trim($user['password'])) {

        // session
        $_SESSION['userID'] = $user['userID'];
        $_SESSION['user'] = $user['email'];
        $_SESSION['role'] = $user['role'];

        // redirect based on role
        if ($user['role'] === 'admin') {
            header("Location: Admin Panel/Admin_Dashboard.php");
            exit;
        } else {
            header("Location: Customer Panel/Customer_dashboard.php");
            exit;
        }

    } else {
        echo "<script>
            alert('Wrong password!');
            window.location.href='login.php';
        </script>";
    }

} else {
    echo "<script>
        alert('Email not found. Please register first.');
        window.location.href='register.php';
    </script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Now</title>

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
      background: rgba(255,255,255,0.92);
      border-radius: 15px;
      padding: 35px;
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
        <h2 class="text-center fw-bold mb-4" style="color:#01013e">Welcome Back</h2>
        <p class="text-center text-muted mb-4">Login to Grand Palace Hotel</p>

        <!-- Login Form -->
        <form action="login.php" method="POST">
          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
          </div>

          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>

          <button type="submit" class="btn btn-gold w-100 py-2">Login</button>
        </form>

        <p class="text-center mt-3 mb-0">
          Don’t have an account? <a href="register.php" style="color:#04044e">Register now</a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
