
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FarmUnity | Company Registration</title>
  <meta name="description" content="Register your company on FarmUnity to connect directly with farmers for quality produce." />
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

    .registration-hero {
      background: linear-gradient(rgba(76, 175, 80, 0.8), rgba(76, 175, 80, 0.8)), 
                  url('https://source.unsplash.com/1200x600/?agriculture,business');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 4rem 0;
    }

    .registration-card {
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      border: none;
    }

    .form-control:focus {
      border-color: #81C784;
      box-shadow: 0 0 0 0.25rem rgba(76, 175, 80, 0.25);
    }

    .btn-agro {
      background-color: #4CAF50;
      color: white;
      padding: 10px 25px;
    }

    .btn-agro:hover {
      background-color: #3e8e41;
      color: white;
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
  <!-- Navbar -->
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
            <a class="nav-link dropdown-toggle active" href="#" id="registerDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Register</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="farmerRegister.php">Register as Farmer</a></li>
              <li><a class="dropdown-item active" href="companyRegister.php">Register as Company</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="registration-hero text-center">
    <div class="container">
      <h1 class="display-4 fw-bold mb-3">Company Registration</h1>
      <p class="lead">Join FarmUnity to source quality produce directly from farmers</p>
    </div>
  </section>

  <!-- Registration Form -->
  <section class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card registration-card">
            <div class="card-body p-5">
              <h3 class="card-title text-center mb-4">Create Your Company Account</h3>
              
              <form>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="companyName" class="form-label">Company Name *</label>
                    <input type="text" class="form-control" id="companyName" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="businessType" class="form-label">Business Type *</label>
                    <select class="form-select" id="businessType" required>
                      <option value="" selected disabled>Select business type</option>
                      <option value="retailer">Retailer</option>
                      <option value="distributor">Distributor</option>
                      <option value="processor">Processor</option>
                      <option value="restaurant">Restaurant/Hotel</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email Address *</label>
                  <input type="email" class="form-control" id="email" required>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="password" class="form-label">Password *</label>
                    <input type="password" class="form-control" id="password" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password *</label>
                    <input type="password" class="form-control" id="confirmPassword" required>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="address" class="form-label">Business Address *</label>
                  <textarea class="form-control" id="address" rows="2" required></textarea>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Phone Number *</label>
                    <input type="tel" class="form-control" id="phone" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="website" class="form-label">Website (optional)</label>
                    <input type="url" class="form-control" id="website">
                  </div>
                </div>

                <div class="mb-3">
                  <label for="productsNeeded" class="form-label">What products are you looking for? *</label>
                  <textarea class="form-control" id="productsNeeded" rows="3" required></textarea>
                </div>

                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="termsCheck" required>
                  <label class="form-check-label" for="termsCheck">I agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a> *</label>
                </div>

                <div class="d-grid">
                  <button type="submit" class="btn btn-agro btn-lg">Register Now</button>
                </div>

                <div class="text-center mt-3">
                  <p>Already have an account? <a href="login.php">Login here</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          <h5>FarmUnity</h5>
          <p>Bringing quality services since 2023.</p>
        </div>
       
        <div class="col-md-6 text-center text-md-end">
          <h5>Follow Us</h5>
          <div class="social-icons ">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
      </div>
      
    </div>
    <hr class="my-4">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="text-muted small">&copy; 2023 FarmUnity. All rights reserved.</p>
        </div>
      </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>