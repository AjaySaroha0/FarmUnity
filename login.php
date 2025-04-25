<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FarmUnity | Login</title>
  <meta name="description" content="Login to FarmUnity to access your farmer or company account and connect with agricultural partners." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="icon" href="favicon.ico" type="image/x-icon" />

  <style>
    .navbar-agro {
      background: linear-gradient(to right, #4CAF50, #81C784);
    }

    .navbar-agro .nav-link,
    .navbar-agro .navbar-brand {
      color: white !important;
      font-weight: 500;
    }

    .navbar-agro .nav-link:hover {
      color: #f1f8e9 !important;
    }
    
    .login-container {
      max-width: 500px;
      margin: 50px auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    
    .login-header {
      text-align: center;
      margin-bottom: 30px;
    }
    
    .login-icon {
      font-size: 3rem;
      color: #4CAF50;
      margin-bottom: 15px;
    }
    
    .form-control:focus {
      border-color: #81C784;
      box-shadow: 0 0 0 0.25rem rgba(76, 175, 80, 0.25);
    }
    
    .btn-login {
      background-color: #4CAF50;
      border: none;
      padding: 10px;
      font-weight: 500;
    }
    
    .btn-login:hover {
      background-color: #3e8e41;
    }
    
    .login-links {
      text-align: center;
      margin-top: 20px;
    }
    
    footer {
      background-color: #f8f9fa;
      padding: 2rem 0;
    }
    
    footer a {
      text-decoration: none;
    }
    
    footer a:hover {
      color: #4CAF50;
    }
    
    .social-icons a {
      display: inline-block;
      margin: 0 10px;
      font-size: 1.5rem;
    }
    
    .social-icons a:hover {
      color: #4CAF50;
    }
  </style>
</head>
<body>
  <!-- Navbar (same as homepage) -->
  <nav class="navbar navbar-expand-lg navbar-agro">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="index.html">
        FarmUnity
      </a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="registerDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Register</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="farmerRegister.php">Register as Farmer</a></li>
              <li><a class="dropdown-item" href="companyRegister.php">Register as Company</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Login Form -->
  <div class="container">
    <div class="login-container bg-white">
      <div class="login-header">
        <i class="bi bi-person-fill login-icon"></i>
        <h2>Welcome Back</h2>
        <p class="text-muted">Login to your FarmUnity account</p>
      </div>
      
      <form action="process_login.php" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
        
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
        </div>
        
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="rememberMe">
          <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-login btn-primary text-white">Login</button>
        </div>
        
        <div class="login-links mt-3">
          <a href="forgot-password.html" class="text-decoration-none">Forgot password?</a>
          <span class="mx-2">|</span>
          <span>Don't have an account? <a href="farmerRegister.php" class="text-decoration-none">Register</a></span>
        </div>
      </form>
    </div>
  </div>

  <!-- Footer (same as homepage) -->
  <footer class="footer mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          <h5>FarmUnity</h5>
          <p>Bringing quality services since 2023.</p>
        </div>
       
        <div class="col-md-6 text-center text-md-end">
          <h5>Follow Us</h5>
          <div class="social-icons">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
      <hr class="my-4">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="text-muted small">&copy; 2023 FarmUnity. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>