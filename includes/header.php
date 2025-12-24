<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo isset($page_title) ? $page_title : 'DhobiExpress - Professional Laundry & Dry Cleaning Services'; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<meta name="msapplication-square70x70logo" content=".../icons8-clothes in laundry-pulsar-color-70.png"> <meta name="msapplication-TileImage" content=".../icons8-clothes in laundry-pulsar-color-144.png"> <meta name="msapplication-square150x150logo" content=".../icons8-clothes in laundry-pulsar-color-150.png"> <meta name="msapplication-square310x310logo" content=".../icons8-clothes in laundry-pulsar-color-310.png">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="css/fontawesome/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    
     
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="lib/glightbox/css/glightbox.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Structured Data for Video SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "VideoObject",
    "name": "24/7 Emergency Laundry Service - Fast Pickup & Delivery",
    "description": "We provide affordable laundry and dry cleaning services with same-day pickup and delivery. Open 24/7.",
    "thumbnailUrl": "video-thumbnail.jpg",
    "uploadDate": "2025-09-04",
    "contentUrl": "videos/laundry.mp4",
    "embedUrl": "https://www.example.com/laundry-video"
  }
  </script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
 <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row align-items-center top-bar">
            <div class="col-lg-3 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
                      <img src="images/logo.svg" alt="Dhobi Express Logo" class="logo-img img-fluid" width="130">
                </a>
            </div>
            <div class="col-lg-9 col-md-12 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <i class="fa fa-map-marker-alt text-primary me-2"></i>
                    <p class="m-0">Govind Nagar, Nashik 422009</p>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <i class="far fa-envelope-open text-primary me-2"></i>
                    <p class="m-0"> shreedhobiexpress@gmail.com</p>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                     <a class="tn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/profile.php?id=61563322649388" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="tn btn-sm-square bg-white text-primary me-1" href="https://www.instagram.com/shreedhobiexpress?igsh=MXU2amVhdmFqZjVqYQ==" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="https://wa.me/919921369907" target="_blank" aria-label="Whatsapp"><i class="fab fa-whatsapp"></i></a>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
            <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
                <img src="images/logo.svg" alt="Dhobi Express Logo" class="logo-img img-fluid" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" 
  aria-expanded="false" 
  aria-label="Toggle navigation">
              
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                   
                    <a class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>" href="index.php">Home</a>
                    <a href="about.php" class="nav-item nav-link <?php echo ($current_page == 'about') ? 'active' : ''; ?>">About</a>
                   
                   
                   <div class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
  <div class="dropdown-menu fade-up m-0">
    <!-- Main services page -->
      <a href="service.php" 
       class="dropdown-item <?php echo ($current_page == 'services') ? 'active' : ''; ?>">
        Services
    </a>
    <a href="laundry.php" 
       class="dropdown-item <?php echo ($current_page == 'Laundry-service') ? 'active' : ''; ?>">
       Laundry Services
    </a>
      <a href="dry-cleaning.php" 
       class="dropdown-item <?php echo ($current_page == 'dry-cleaning-service') ? 'active' : ''; ?>">
       Dry Cleaning Service
    </a>
      <a href="saree-wedding-care.php" 
       class="dropdown-item <?php echo ($current_page == 'saree-wedding-care-service') ? 'active' : ''; ?>">
       Saree and Wedding Care 
    </a>
      <a href="shoe-bag-cleaning.php" 
       class="dropdown-item <?php echo ($current_page == 'shoe-bag-cleaning-service') ? 'active' : ''; ?>">
       Shoe and Bag cleaning Service
    </a>
     

   
  </div>
</div>

                  
                    <a href="contact.php" class="nav-item nav-link <?php echo ($current_page == 'contact') ? 'active' : ''; ?>">Contact</a>
                </div>
                <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-primary d-flex align-items-center">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-3">
                        
                        <h5 class="m-0 text-white">+91 9921369907</h5>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->