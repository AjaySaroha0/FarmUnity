<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FarmUnity | Home</title>
  <meta name="description" content="FarmUnity connects farmers and companies through a trusted digital platform for sustainable agriculture and direct trade." />
  <!-- <link rel="stylesheet" href="index.css" /> -->
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

    .card-img-top {
      height: 200px;
      object-fit: cover;
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
        <!-- <img src="https://via.placeholder.com/30" alt="FarmUnity Logo" class="me-2 rounded-circle" /> -->
        FarmUnity
      </a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero / About -->
  <section class="py-5 bg-light text-center">
    <div class="container">
      <img src="mainimg.webp" class="img-fluid rounded shadow-sm mb-4" alt="Farm landscape" />
      <h2 class="display-5 fw-bold">What We Offer</h2>
      <p class="lead text-muted">AgriConnect is a digital marketplace that enables farmers to connect with buyers directly. No middlemen, just efficient and transparent trading.</p>
    </div>
  </section>

  <!-- Features -->
  <section class="container py-5">
    <div class="row text-center">
      <div class="col-md-4">
        <div class="card border-0 shadow-sm">
          <img src="far1.jpg" class="card-img-top" alt="Farmer smiling with crops" />
          <div class="card-body">
            <h5 class="card-title">For Farmers</h5>
            <p class="card-text">Sell your produce directly to companies. Get better prices and more control over your sales.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm">
          <img src="products.jpg" class="card-img-top" alt="Fresh produce for sale" />
          <div class="card-body">
            <h5 class="card-title">For Companies</h5>
            <p class="card-text">Source fresh produce from verified farmers. Ensure quality and reliability in your supply chain.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4 mt-md-0">
        <div class="card border-0 shadow-sm">
          <img src="communi.webp" class="card-img-top" alt="Farmers and companies communicating" />
          <div class="card-body">
            <h5 class="card-title">Communication</h5>
            <p class="card-text">Message directly with interested parties, set pricing, and build long-term trade relationships.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section class="bg-white py-5 text-center">
    <div class="container">
      <h2>How It Works</h2>
      <div class="row mt-4">
        <div class="col-md-3">
          <img src="register.jpg" class="mb-3 rounded-circle mx-auto d-block" alt="Registration illustration" style="width: 150px; height: 150px; object-fit: cover;" />
          <h5>1. Register</h5>
          <p>Create an account as a Farmer or Company.</p>
        </div>
        <div class="col-md-3">
          <img src="profil.jpg" class="mb-3 rounded-circle mx-auto d-block" alt="Profile creation" style="width: 150px; height: 150px; object-fit: cover;" />
          <h5>2. Create Profile</h5>
          <p>Add your farm/company details and what you're offering or looking for.</p>
        </div>
        <div class="col-md-3">
          <img src="browse.jpg" class="mb-3 rounded-circle mx-auto d-block" alt="Browsing listings" style="width: 150px; height: 150px; object-fit: cover;" />
          <h5>3. Browse Listings</h5>
          <p>Search for companies or farmers that match your needs.</p>
        </div>
        <div class="col-md-3">
          <img src="group-business-people-hands-stack-600nw-2475777367.webp" class="mb-3 rounded-circle mx-auto d-block" alt="People shaking hands" style="width: 150px; height: 150px; object-fit: cover;" />
          <h5>4. Connect & Trade</h5>
          <p>Start conversations, negotiate, and finalize deals directly.</p>
        </div>
      </div>
    </div>
  </section>

 <!-- Testimonials -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">What People Say</h2>
    <p class="text-center text-muted mb-5">Real success stories from farmers and companies using FarmUnity.</p>
    
    <!-- Farmers Testimonials -->
    <div class="row mb-5">
      <div class="col-12">
        <h3 class="text-center mb-4"><i class="bi bi-person-badge me-2"></i>Farmers' Stories</h3>
      </div>
      
      <div class="col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="emptypro.jpg" class="rounded-circle me-3" width="60" height="60" alt="Farmer John">
              <div>
                <h5 class="mb-0">John Peterson</h5>
                <span class="text-muted">Organic Vegetable Farmer</span>
              </div>
            </div>
            <p class="card-text">"FarmUnity has transformed my business. Before, I struggled to find fair prices for my organic produce. Now I connect directly with restaurants and markets, earning 30% more for my crops."</p>
            <div class="text-success">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="emptypro.jpg" class="rounded-circle me-3" width="60" height="60" alt="Farmer Maria">
              <div>
                <h5 class="mb-0">Maria Gonzalez</h5>
                <span class="text-muted">Dairy Farmer</span>
              </div>
            </div>
            <p class="card-text">"As a small dairy farm, we used to rely on middlemen who took most of the profit. With FarmUnity, we now supply directly to cheese makers and cafes, doubling our income last year!"</p>
            <div class="text-success">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Companies Testimonials -->
    <div class="row">
      <div class="col-12">
        <h3 class="text-center mb-4"><i class="bi bi-building me-2"></i>Companies' Stories</h3>
      </div>
      
      <div class="col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="emptypro.jpg" class="rounded-circle me-3" width="60" height="60" alt="Company CEO">
              <div>
                <h5 class="mb-0">David Kim</h5>
                <span class="text-muted">Fresh Market Chain</span>
              </div>
            </div>
            <p class="card-text">"FarmUnity helped us establish direct relationships with local farmers. Our customers love the farm-fresh quality, and we've reduced our supply chain costs by 25%."</p>
            <div class="text-success">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="emptypro.jpg" class="rounded-circle me-3" width="60" height="60" alt="Company CEO">
              <div>
                <h5 class="mb-0">David Kim</h5>
                <span class="text-muted">Fresh Market Chain</span>
              </div>
            </div>
            <p class="card-text">"FarmUnity helped us establish direct relationships with local farmers. Our customers love the farm-fresh quality, and we've reduced our supply chain costs by 25%."</p>
            <div class="text-success">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>
      </div>
      
    </div>

  <!-- Call to Action -->
  <section class="bg-success text-white text-center py-5">
    <div class="container">
      <h2 class="fw-bold">Join FarmUnity Today</h2>
      <p>Experience a better way to trade produce. It's free to get started!</p>
      <a href="farmerRegister.php" class="btn btn-outline-light btn-lg mt-3 me-2">Register as Farmer</a>
      <a href="companyRegister.php" class="btn btn-outline-light btn-lg mt-3">Register as Company</a>
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