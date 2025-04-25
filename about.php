<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FarmUnity | About Us</title>
  <meta name="description" content="Learn about FarmUnity, our partners, and the products we connect between farmers and companies." />
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

    .hero-about {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('farm-field.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 100px 0;
      text-align: center;
    }

    .partner-card {
      transition: transform 0.3s;
      margin-bottom: 20px;
    }

    .partner-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .product-badge {
      background-color: #4CAF50;
      color: white;
    }

    .contact-card {
      border-left: 4px solid #4CAF50;
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
            <a class="nav-link dropdown-toggle" href="#" id="registerDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Register</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="farmerRegister.php">Register as Farmer</a></li>
              <li><a class="dropdown-item" href="companyRegister.php">Register as Company</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-about">
    <div class="container">
      <h1 class="display-4 fw-bold">About FarmUnity</h1>
      <p class="lead">Connecting farmers directly with companies for sustainable agriculture and fair trade</p>
    </div>
  </section>

  <!-- Our Story -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h2 class="mb-4">Our Story</h2>
          <p>Founded in 2023, FarmUnity was born from a simple idea: to create a direct connection between farmers and agricultural companies, eliminating unnecessary middlemen and ensuring fair prices for all.</p>
          <p>Today, we've grown into a trusted platform with over 500 registered farmers and 200 companies across the country, facilitating thousands of transactions every month.</p>
          <p>Our mission is to empower small-scale farmers while helping companies source high-quality products directly from producers.</p>
        </div>
        <div class="col-lg-6">
          <img src="farms.jpg" alt="FarmUnity team" class="img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Partners -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-5">Our Featured Partners</h2>
      
      <div class="row">
        <!-- Farmers -->
        <div class="col-md-6">
          <h3 class="text-center mb-4"><i class="bi bi-person-badge me-2"></i>Farmers</h3>
          
          <div class="card partner-card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="emptypro.jpg" class="rounded-circle me-3" width="60" height="60" alt="Farmer John">
                <div>
                  <h5 class="mb-0">John's Organic Farm</h5>
                  <span class="text-muted">Since 2010</span>
                </div>
              </div>
              <p>Specializes in organic vegetables and free-range eggs. Located in California.</p>
              <div>
                <span class="badge product-badge me-1">Tomatoes</span>
                <span class="badge product-badge me-1">Lettuce</span>
                <span class="badge product-badge">Eggs</span>
              </div>
            </div>
          </div>
          
          <div class="card partner-card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="emptypro.jpg" class="rounded-circle me-3" width="60" height="60" alt="Farmer Maria">
                <div>
                  <h5 class="mb-0">Maria's Dairy</h5>
                  <span class="text-muted">Since 2005</span>
                </div>
              </div>
              <p>Family-run dairy farm producing milk, cheese, and yogurt. Based in Wisconsin.</p>
              <div>
                <span class="badge product-badge me-1">Milk</span>
                <span class="badge product-badge me-1">Cheese</span>
                <span class="badge product-badge">Yogurt</span>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Companies -->
        <div class="col-md-6">
          <h3 class="text-center mb-4"><i class="bi bi-building me-2"></i>Companies</h3>
          
          <div class="card partner-card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="emptypro.jpg" class="rounded-circle me-3" width="60" height="60" alt="Green Foods">
                <div>
                  <h5 class="mb-0">Green Foods Co.</h5>
                  <span class="text-muted">Organic Retailer</span>
                </div>
              </div>
              <p>National organic food retailer sourcing directly from small farms since 2015.</p>
              <div>
                <span class="badge product-badge me-1">Vegetables</span>
                <span class="badge product-badge me-1">Fruits</span>
                <span class="badge product-badge">Dairy</span>
              </div>
            </div>
          </div>
          
          <div class="card partner-card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="emptypro.jpg" class="rounded-circle me-3" width="60" height="60" alt="Fresh Restaurants">
                <div>
                  <h5 class="mb-0">Fresh Restaurants</h5>
                  <span class="text-muted">Restaurant Chain</span>
                </div>
              </div>
              <p>Farm-to-table restaurant group with 25 locations across the Midwest.</p>
              <div>
                <span class="badge product-badge me-1">Produce</span>
                <span class="badge product-badge me-1">Meat</span>
                <span class="badge product-badge">Dairy</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-4">
        <a href="#" class="btn btn-success">View All Partners</a>
      </div>
    </div>
  </section>

  <!-- Products Section -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-5">Featured Products</h2>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="organic.jpg" class="card-img-top" alt="Organic Vegetables" style="height: 250px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Organic Vegetables</h5>
            <p class="card-text">Fresh, pesticide-free vegetables from our network of certified organic farms.</p>
            <p><strong>Available from:</strong> 120+ farmers</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="dairyproducts1.jpg" class="card-img-top" alt="Dairy Products" style="height: 250px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Dairy Products</h5>
            <p class="card-text">Milk, cheese, yogurt and more from grass-fed, hormone-free cows.</p>
            <p><strong>Available from:</strong> 45+ dairy farms</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="grains.jpg" class="card-img-top" alt="Grains and Legumes" style="height: 250px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Grains & Legumes</h5>
            <p class="card-text">High-quality wheat, corn, beans and other staple crops.</p>
            <p><strong>Available from:</strong> 80+ farmers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Contact Us -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-5">Contact Us</h2>
      
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card h-100 contact-card">
            <div class="card-body">
              <h4><i class="bi bi-info-circle me-2"></i>General Inquiries</h4>
              <p class="mt-3"><i class="bi bi-envelope me-2"></i> info@farmunity.com</p>
              <p><i class="bi bi-telephone me-2"></i> (800) 555-1234</p>
              <p><i class="bi bi-geo-alt me-2"></i> 123 Farm Road, Agricultural City, AC 12345</p>
              
              <h4 class="mt-4"><i class="bi bi-people me-2"></i>Partnerships</h4>
              <p class="mt-3"><i class="bi bi-envelope me-2"></i> partnerships@farmunity.com</p>
              <p><i class="bi bi-telephone me-2"></i> (800) 555-5678</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 mb-4">
          <div class="card h-100 contact-card">
            <div class="card-body">
              <h4><i class="bi bi-chat-left-text me-2"></i>Get In Touch</h4>
              <form class="mt-3">
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="mb-3">
                  <select class="form-select">
                    <option>I'm a farmer</option>
                    <option>I'm a company</option>
                    <option>Other</option>
                  </select>
                </div>
                <div class="mb-3">
                  <textarea class="form-control" rows="3" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Our Team</h2>
      <div class="row">

      <div class="col-md-4 mb-4">
          <div class="card text-center border-0">
            <img src="emptypro.jpg" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px; object-fit: cover;" alt="CTO">
            <div class="card-body">
              <h5 class="card-title">Ajay Saroha</h5>
              <p class="text-muted">CEO & Founder</p>
              <p class="card-text">Technology expert building platforms that empower agricultural communities.</p>
            </div>
          </div>
        </div>

      
        <div class="col-md-4 mb-4">
          <div class="card text-center border-0">
            <img src="emptypro.jpg" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px; object-fit: cover;" alt="CEO">
            <div class="card-body">
              <h5 class="card-title">Shanuj</h5>
              <p class="text-muted">CTO</p>
              <p class="card-text">Former agricultural economist with a passion for connecting farmers to markets.</p>
            </div>
          </div>
        </div>
       
        
        <div class="col-md-4 mb-4">
          <div class="card text-center border-0">
            <img src="emptypro.jpg" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px; object-fit: cover;" alt="Head of Partnerships">
            <div class="card-body">
              <h5 class="card-title">Google</h5>
              <p class="text-muted">Head of Partnerships</p>
              <p class="card-text">Connects farmers with the right companies to create sustainable supply chains.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
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