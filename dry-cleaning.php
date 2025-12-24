<?php 

$page_title = "Service-Detail - DhobiExpress";
$current_page = "dry-cleaning-service";
include 'includes/header.php';?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Dry Cleaning Service</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Dry-Cleaning-Service</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- -->
    <!-- -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-4">
      <!-- Left Column -->
      <div class="col-md-8 wow fadeInUp" data-wow-delay="0.1s">
        <div class="mb-4">
          <img src="images/dry-cln-service.jpg" class="img-fluid service-img" alt="Laundry Service">
        </div>
        <h2 class="mb-3">Dry Cleaning Service</h2>
        At Premium Dry Cleaning, we specialize in providing top-notch garment care using advanced cleaning technology and eco-friendly solvents that are gentle on fabrics yet powerful on stains. Unlike regular washing, our dry cleaning process is designed to protect the delicate fibers of your clothes, ensuring that colors remain vibrant and fabrics maintain their natural texture and shape. From everyday formal wear to designer outfits and heavily embellished garments, we handle each piece with the utmost care and precision. Our trained professionals pay attention to the smallest details—whether it’s stain removal, fabric finishing, or pressing—so that every item is returned to you looking fresh, crisp, and ready to wear. With a strong focus on hygiene and quality, we also provide special treatments for delicate fabrics such as silk, wool, and chiffon, making sure they are preserved for longer use. Whether it’s business suits, sarees, wedding gowns, or luxury fashion items, our dry cleaning service ensures your garments not only look impeccable but also last longer, saving you time and effort while keeping you confident and stylish.



<div class="accordion py-3" id="serviceAccordion">
  
   <!-- Accordion Item 1 -->
<div class="accordion-item border-0">
  <h2 class="accordion-header" id="headingOne">
    <button class="accordion-button d-flex justify-content-between align-items-center w-100 text-secondary fw-bold" 
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <span>Premium Laundry</span>
      <span class="toggle-icon text-secondary">-</span>
    </button>
  </h2>
  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#serviceAccordion">
    <div class="accordion-body text-muted">
      We provide professional laundry service with quality detergents, fabric care, and steam finishing.
    </div>
  </div>
</div>

  

  <!-- Accordion Item 2 -->
  <div class="accordion-item border-0">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed d-flex justify-content-between align-items-center w-100 text-primary fw-bold" 
              type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <span> Saree & Wedding Dress Care</span>
        <span class="toggle-icon text-primary">+</span>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#serviceAccordion">
      <div class="accordion-body text-muted">
        Gentle dry cleaning for delicate sarees, bridal gowns, and premium fabrics with stain protection.
      </div>
    </div>
  </div>

  <!-- Accordion Item 3 -->
  <div class="accordion-item border-0">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed d-flex justify-content-between align-items-center w-100 text-primary fw-bold" 
              type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <span>Shoe & Bag Cleaning</span>
        <span class="toggle-icon text-primary">+</span>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#serviceAccordion">
      <div class="accordion-body text-muted">
        Specialized cleaning and restoration for leather shoes, handbags, and luxury accessories.
      </div>
    </div>
  </div>
</div>


      </div>


      <!-- Right Column -->
      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
        <!-- Categories List -->
        <div class="bg-light p-4 mb-4 rounded shadow-sm">
          <h4 class="mb-3">Categories</h4>
          <ul class="list-unstyled mb-0 category-list">
  <li><a href="dry-cleaning.php" class="d-block py-2 text-decoration-none">Premium Dry Cleaning</a></li>
  <li><a href="laundry.php" class="d-block py-2 text-decoration-none">Laundry</a></li>
  <li><a href="saree-wedding-care.php" class="d-block py-2 text-decoration-none">Saree & Wedding Dress Care</a></li>
  <li><a href="shoe-bag-cleaning.php" class="d-block py-2 text-decoration-none">Shoe & Bag Cleaning</a></li>
</ul>

          
        </div>

        <!-- Phone Service Box -->
        <div class="position-relative rounded overflow-hidden text-white" style="background: url('images/section-bg.jpg') center/cover no-repeat; min-height: 180px;">
          <!-- Overlay -->
          <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(27, 93, 128, 0.7);"></div>
          
          <!-- Content -->
           <div class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-3" style="min-height: 200px;">
  <i class="fa fa-phone fa-2x mb-2 text-white"></i>
  <h5 class="mb-1 text-white">Order Service</h5>
  <p class="mb-0 text-white">+91 9921369907</p>
</div>

        
        </div>
      </div>
    </div>
  </div>
</div>
<!-- -->

   
    <!-- -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    let currentPage = window.location.pathname.split("/").pop(); 
    let links = document.querySelectorAll(".category-list a");

    links.forEach(link => {
      if (link.getAttribute("href") === currentPage) {
        link.parentElement.style.display = "none"; 
      }
    });
  });
  document.querySelectorAll('.accordion-button').forEach(button => {
    const icon = button.querySelector('.toggle-icon');

    button.addEventListener('click', () => {
      const allButtons = document.querySelectorAll('.accordion-button');
      const allIcons = document.querySelectorAll('.toggle-icon');

      // Reset all
      allButtons.forEach(btn => {
        btn.classList.remove('text-secondary');
        btn.classList.add('text-primary');
      });

      allIcons.forEach(icn => {
        icn.textContent = '+';
        icn.classList.remove('text-secondary');
        icn.classList.add('text-primary');
      });

      // If expanded, switch to active state
      setTimeout(() => {
        if (!button.classList.contains('collapsed')) {
          button.classList.remove('text-primary');
          button.classList.add('text-secondary');

          icon.textContent = '-';
          icon.classList.remove('text-primary');
          icon.classList.add('text-secondary');
        }
      }, 200);
    });
  });
  
  
  
</script>

<?php include_once 'includes/footer.php';?>