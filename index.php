<?php 
$page_title = "DhobiExpress - Professional Laundry & Dry Cleaning Services";
$current_page = "home";
include 'includes/header.php'; ?>

<!-- Carousel Start -->

<!-- Carousel End<div class="container-fluid p-0 mb-5">
    <div class="header-section position-relative">
        <div class="header-section-item position-relative">
            <img class="img-fluid" src="images/woman-holding-pile-clean-clothes.webp" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                 style="background: rgba(0, 0, 0, .4);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white mb-4">Shree Dhobi Express</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                Premium Dry Cleaning & Laundry Service
                            </p>
                            <a href="about.php"
                               class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="#"
                               class="btn btn-secondary py-md-3 px-md-5 animated slideInRight" data-bs-toggle="modal" data-bs-target="#contactModal">Book a Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
  <div class="header-section position-relative">
    <div class="header-section-item position-relative">
      <picture>
        <!-- AVIF format first (best compression) -->
        <source 
          srcset="
            images/woman-holding-pile-clean-clothes-small.avif 700w,
            images/woman-holding-pile-clean-clothes-medium.avif 1200w,
            images/woman-holding-pile-clean-clothes-large.avif 1920w
          " 
          type="image/avif">

        <!-- WebP fallback for browsers that don't support AVIF -->
        <source 
          srcset="
            images/woman-holding-pile-clean-clothes-small.webp 700w,
            images/woman-holding-pile-clean-clothes-medium.webp 1200w,
            images/woman-holding-pile-clean-clothes-large.webp 1920w
          " 
          type="image/webp">

        <!-- Default fallback (JPEG/PNG if older browser) -->
        <img 
          class="img-fluid" 
          src="images/woman-holding-pile-clean-clothes-large.webp" 
          alt="Woman holding clean clothes at Shree Dhobi Express" 
         >
      </picture>

      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
           style="background: rgba(0, 0, 0, .4);">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-10 col-lg-8">
              <h1 class="display-3 text-white mb-4">Shree Dhobi Express</h1>
              <p class="fs-5 fw-medium text-white mb-4 pb-2">
                Premium Dry Cleaning & Laundry Service
              </p>
              <div class="d-flex flex-wrap align-items-center header-btn">
                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                <a href="https://wa.me/919921369907" target="_blank" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Book a Service</a>
              </div>
             
                 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="text-secondary text-uppercase">Welcome to Shree Dhobi Express</h6>
                <h1 class="mb-5">Fresh clothes, hassle-free</h1>
                <p class="mb-4">
                    At Shree Dhobi Express, we believe that your clothes deserve the best care. With years of
                    experience in professional dry cleaning and laundry, we combine modern technology,
                    eco-friendly solutions, and expert care to give your garments a fresh, crisp, and premium
                    finish every time.
                </p>
                <p class="mb-4">
                    Whether it’s your everyday wear, delicate fabrics, business attire, or designer outfits,
                    our dedicated team ensures spotless cleaning and on-time delivery.
                </p>
                
                <div class="d-flex align-items-center mt-2">
                    <a href="https://wa.me/919921369907" target="_blank"
                               class="btn btn-secondary py-md-3 px-md-5 animated slideInLeft" >Book a Service</a>
                </div>
            </div>
            <div class="col-lg-6 pt-4" style="min-height: 500px;">
                <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="position-absolute img-fluid w-100 h-100"
                         src="images/laundromat-worker.webp"
                         style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                    <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                         src="images/about-02.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Promise Section -->
<section class="promise-section">
    <div class="promise-content">
        <h6 class="text-white">Our Promise</h6>
        <h2 class="text-white">At Shree Dhobi Express, your clothes are not just garments</h2>
        <p>They are an extension of your personality. We promise to keep them looking fresh, stylish, and long-lasting.</p>
    </div>
    <div class="promise-image-wrapper">
        <img src="images/woman-holding-laundry.webp" alt="Woman in a laundry room with baskets">
    </div>
</section>

<!-- Services Carousel -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="owl-carousel owl-theme service-carousel">
            
            <!-- Service Item -->
            <div class="item">
                <div class="service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-image-box overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="images/dry-cln-service.jpg" alt="">
                    </div>
                    <div class="service-content-box bg-light p-4">
                        <h5 class="text-truncate me-3 mb-1">Premium Dry Cleaning</h5>
                        <p>Delicate fabrics and luxury garments need a gentle touch. Our advanced dry cleaning
                           process protects your clothes while removing stains, dust, and odors.</p>
                        <a href="dry-cleaning.php" class="btn bg-white text-primary w-100 mt-2">
                            Read More<i class="fa fa-arrow-right text-secondary ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
<div class="item">
                    <div class="service-item-top wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-image-box overflow-hidden">
                            <img class="img-fluid w-100 h-100" src="images/lndry-service.jpg" alt="">
                        </div>
                        <div class="service-content-box bg-light p-4">
                            <h5 class="text-truncate me-3 mb-1"> Professional Laundry Service</h5>
                            <p>From daily wear to office uniforms, we wash, iron, and fold with perfection—so you always look your best.</p>
                            <a href="laundry.php" class="btn bg-white text-primary w-100 mt-2">Read More<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="service-item-top wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-image-box overflow-hidden">
                            <img class="img-fluid w-100 h-100" src="images/wd-care-service.jpg" alt="">
                        </div>
                        <div class="service-content-box bg-light p-4">
                            <h5 class="text-truncate me-3 mb-1"> Saree and Wedding Dress Care</h5>
                            <p>Special outfits require special care. We handle bridal wear, heavy sarees, and ethnic clothing with extra attention and precision.</p>
                            <a href="saree-wedding-care.php" class="btn bg-white text-primary w-100 mt-2">Read More<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-item-top wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-image-box overflow-hidden">
                            <img class="img-fluid w-100 h-100" src="images/shoe-service.jpg" alt="">
                        </div>
                        <div class="service-content-box bg-light p-4">
                            <h5 class="text-truncate me-3 mb-1">Shoe & Bag Cleaning</h5>
                            <p>Keep your shoes, handbags, and leather goods looking brand new with our expert cleaning and restoration services.</p>
                            <a href="shoe-bag-cleaning.php" class="btn bg-white text-primary w-100 mt-2">Read More<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="service-item-top wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-image-box overflow-hidden">
                            <img class="img-fluid w-100 h-100" src="images/pickup-service.jpg" alt="">
                        </div>
                        <div class="service-content-box bg-light p-4">
                            <h5 class="text-truncate me-3 mb-1"> Free Pickup & Delivery</h5>
                            <p>No more waiting in line! Enjoy doorstep convenience with free pickup and delivery at your chosen time.</p>
                            <a href="" class="btn bg-white text-primary w-100 mt-2">Read More<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
                    </div>
                </div>
           

        </div>
    </div>
</div>

     <!-- Booking Start -->
      <!-- Video Modal-->
  <div class="container-fluid px-0" style="margin: 4rem 0">
   
    <div class="video wow fadeInUp" data-wow-delay="0.1s">
       <a href="videos/laundry-dry-cleaning-services-yourcity.mp4" type="button" class="btn-play glightbox" >
        <span></span>
</a>
      




        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Laundry Services</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="ratio ratio-16x9">
                        <video 
  src="videos/laundry-dry-cleaning-services-nashik.mp4"
  preload="none"
  controls
  poster="images/video-thumbnail.webp">
</video>

                       
                       </div>
                    </div>
                </div>
           </div>
        </div> 
       

        
            <h1 class="text-white mb-4">Emergency Laundry Service</h1>
            <h3 class="text-white mb-0"> 7 Days a Week</h3>
    </div>
</div>



      
  <!-- Booking End -->
 
<!-- How It Works Section -->
  <section class="how-it-works-section">
        <div class="how-it-works-bg">
            <div class="container">
                <h6 class="text-secondary text-uppercase">How We Works</h6>
                <h2 class="mb-5">Laundry care, step by step</h2>
            </div>
        </div>

        <div class="container-fluid card-container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-2-4 card-wrapper wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card bg-light">
                        <div class="card-number">1</div>
                        <div class="card-body">
                            <img src="images/20944700.png" alt="Sign Up Icon" class="card-icon">
                            <h5 class="card-title">Premium Quality</h5>
                            <p class="card-text">State-of-the-art equipment & eco-friendly cleaning solutions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2-4 card-wrapper wow fadeInUp" data-wow-delay="0.2s" >
                    <div class="card bg-light">
                        <div class="card-number">2</div>
                        <div class="card-body">
                            <img src="images/Wavy_Tech-04.png" alt="Deals Icon" class="card-icon">
                            <h5 class="card-title">Affordable Pricing</h5>
                            <p class="card-text">Luxury cleaning at reasonable rates.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2-4 card-wrapper wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card bg-light">
                        <div class="card-number">3</div>
                        <div class="card-body">
                            <img src="images/20943432.png" alt="On-Time Delivery" class="card-icon">
                            <h5 class="card-title">On-Time Delivery</h5>
                            <p class="card-text">Because your time is valuable</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2-4 card-wrapper wow fadeInUp" data-wow-delay="0.4s">
                    <div class="card bg-light">
                        <div class="card-number">4</div>
                        <div class="card-body">
                            <img src="images/4400254.png" alt="Trusted Experts" class="card-icon">
                            <h5 class="card-title">Trusted Experts</h5>
                            <p class="card-text">Skilled professionals with years of experience.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2-4 card-wrapper wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card bg-light">
                        <div class="card-number">5</div>
                        <div class="card-body">
                            <img src="images/6604.png" alt="Customer Satisfaction" class="card-icon">
                            <h5 class="card-title">Customer Satisfaction</h5>
                            <p class="card-text">Thousands of happy customers trust Shree Dhobi Express.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Counter Section -->
<div class="counter-section text-white text-center my-5">
  <div class="container counter-content my-5">
    <div class="row text-center">
      <h6 class="text-white">Our Achievements</h6>
      <h2 class="mb-5 text-white">We Have Great Achievement For Showing With You</h2>
    </div>
    <div class="row mt-5 g-4"> <!-- 👈 added g-4 for spacing -->
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
        <i class="fa-solid fa-calendar-alt fa-3x mb-3"></i>
        <h2 class="text-white mb-2">20+</h2>
        <p class="text-white mb-0">Years Experience</p>
      </div>
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
        <i class="fa-solid fa-smile fa-3x mb-3"></i>
        <h2 class="text-white mb-2">1200+</h2>
        <p class="text-white mb-0">Happy Customers</p>
      </div>
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
        <i class="fa-solid fa-tshirt fa-3x mb-3"></i>
        <h2 class="text-white mb-2">1000+</h2>
        <p class="text-white mb-0">Garments Cleaned</p>
      </div>
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
        <i class="fa-solid fa-store fa-3x mb-3"></i>
        <h2 class="text-white mb-2">5</h2>
        <p class="text-white mb-0">Branches</p>
      </div>
    </div>
  </div>
</div>


<!-- Why Choose Us -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-secondary text-uppercase">Why Choose Us</h6>
            <h2 class="mb-5">Quality care you can trust.</h2>
        </div>
        <div class="row d-flex align-items-center" id="app-feature">
            <!-- Left Features -->
            <div class="col-lg-4 col-md-4 col-sm-12 text-center text-md-end">
                <!-- Feature Item -->
                <div class="feature-item mt-3 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="icon"><i class="fa-solid fa-gem"></i></div>
                    <div class="text">
                        <h3 class="bottom15">Premium Quality</h3>
                        <p>State-of-the-art equipment & eco-friendly cleaning solutions.</p>
                    </div>
                </div>
                <div class="feature-item mt-5 wow fadeInLeft" data-wow-delay="350ms">
                    <div class="icon"><i class="fa-solid fa-tags"></i></div>
                    <div class="text">
                        <h3 class="bottom15">Affordable Pricing</h3>
                        <p>Luxury cleaning at reasonable rates.</p>
                    </div>
                </div>
            </div>
            <!-- Center Image -->
            <div class="col-md-4 text-center p-5">
                <img src="images/wcu-img.jpg" alt="Why Choose Us" class="app-image">
            </div>
            <!-- Right Features -->
            <div class="col-lg-4 col-md-4 col-sm-12 text-center text-md-start">
                <div class="feature-item mt-3 wow fadeInRight" data-wow-delay="300ms">
                    <div class="icon"><i class="fa-solid fa-truck-fast"></i></div>
                    <div class="text">
                        <h3 class="bottom15">On-Time Delivery</h3>
                        <p>Because your time is valuable.</p>
                    </div>
                </div>
                <div class="feature-item mt-5 wow fadeInRight" data-wow-delay="350ms">
                    <div class="icon"><i class="fa-solid fa-handshake"></i></div>
                    <div class="text">
                        <h3 class="bottom15">Trusted Experts</h3>
                        <p>Skilled professionals with years of experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



 
  
   

 <section class="bg-light text-center py-5">
  <div class="container">
    <h5 class="mb-3">Want To Franchise With Us?</h5>
    <h2 class="mb-4">Request A Free Franchise Consultation</h2>
    <a href="https://wa.me/919921369907" target="_blank" class="btn btn-primary">
      ENQUIRE NOW
    </a>
  </div>
</section>
<section class="image-carousel-section mb-5">
  <div class="container-fluid p-0">
    <div class="owl-carousel gallery-carousel">
     
      <div class="item">
        <a  class="glightbox" href="images/galary-image-1.jpeg" data-gallery="gallery-carousel" data-width="600" data-height="500">
          <img src="images/galary-image-1.jpeg" alt="Image 1">
        </a>
      </div>
      <div class="item">
        <a  class="glightbox" href="images/galary-image-2.jpeg" data-gallery="gallery-carousel" data-width="600" data-height="500">
          <img src="images/galary-image-2.jpeg" alt="Image 2">
        </a>
      </div>
      <div class="item">
        <a class="glightbox" href="images/galary-image-3.jpeg" data-gallery="gallery-carousel" data-width="600" data-height="500">
          <img src="images/galary-image-3.jpeg" alt="Image 3">
        </a>
      </div>
      <div class="item">
        <a class="glightbox" href="images/galary-image-4.jpeg" data-gallery="gallery-carousel" data-width="600" data-height="500">
          <img src="images/galary-image-4.jpeg" alt="Image 4">
        </a>
      </div>
       <div class="item">
        <a class="glightbox" href="images/galary-image-5.jpeg" data-gallery="gallery-carousel" data-width="600" data-height="500">
          <img src="images/galary-image-5.jpeg" alt="Image 5">
        </a>
      </div>
      <div class="item">
        <a class="glightbox" href="images/galary-image-6.jpeg" data-gallery="gallery-carousel" data-width="600" data-height="500">
          <img src="images/galary-image-6.jpeg" alt="Image 6">
        </a>
      </div>
       <div class="item">
        <a class="glightbox" href="images/galary-image-7.jpeg" data-gallery="gallery-carousel" data-width="600" data-height="500">
          <img src="images/galary-image-7.jpeg" alt="Image 7">
        </a>
      </div>
       <div class="item">
        <a class="glightbox" href="images/galary-image-8.jpeg" data-gallery="gallery-carousel" data-width="600" data-height="500">
          <img src="images/galary-image-8.jpeg" alt="Image 8">
        </a>
      </div>
       <div class="item">
        <a class="glightbox" href="images/galary-image-9.jpeg" data-gallery="gallery-carousel" data-width="600" data-height="500">
          <img src="images/galary-image-9.jpeg" alt="Image 9">
        </a>
      </div>
       <div class="item">
        <a class="glightbox" href="images/galary-image-10.jpeg" data-gallery="gallery-carousel" data-width="600" data-height="500">
          <img src="images/galary-image-10.jpeg" alt="Image 10">
        </a>
      </div>
       <div class="item">
        <a class="glightbox" href="images/galary-image-11.jpeg" data-gallery="gallery-carousel" data-width="600" data-height="500">
          <img src="images/galary-image-11.jpeg" alt="Image 11">
        </a>
      </div>
       <div class="item">
        <a class="glightbox" href="images/galary-image-12.jpeg" data-gallery="gallery-carousel" data-width="600" data-height="500">
          <img src="images/galary-image-12.jpeg" alt="Image 12">
        </a>
      </div>
       <div class="item">
        <a class="glightbox" href="images/galary-image-13.jpeg" data-gallery="gallery-carousel" data-width="600" data-height="500">
          <img src="images/galary-image-13.jpeg" alt="Image 13">
        </a>
      </div>
    </div>
  </div>
</section>
 <!-- 🔵 Parent Container 
  <section class="image-carousel-section">
    <div class="container-fluid p-0">
      <div class="owl-carousel owl-theme gallery-carousel">
        <div class="item">
              <a class="glightbox" data-gallery="images-gallery" href="https://picsum.photos/800/600?random=1">
            <img src="https://picsum.photos/800/600?random=1" alt="Image 1">
</a></div>
        <div class="item"><a class="glightbox" data-gallery="images-gallery" href="https://picsum.photos/800/600?random=2"><img src="https://picsum.photos/800/600?random=2" alt="Image 2"></a></div>
        <div class="item"><a class="glightbox" data-gallery="images-gallery" href="https://picsum.photos/800/600?random=2"><img src="https://picsum.photos/800/600?random=3" alt="Image 3"></a></div>
        <div class="item"><a class="glightbox" data-gallery="images-gallery" href="https://picsum.photos/800/600?random=2"><img src="https://picsum.photos/800/600?random=4" alt="Image 4"><a></div>
        <div class="item"><a class="glightbox" data-gallery="images-gallery" href="https://picsum.photos/800/600?random=2"><img src="https://picsum.photos/800/600?random=5" alt="Image 5"></a></div>
        <div class="item"><a class="glightbox" data-gallery="images-gallery" href="https://picsum.photos/800/600?random=2"><img src="https://picsum.photos/800/600?random=6" alt="Image 6"></a></div>
      </div>
    </div>
  </section>-->

  

<?php include_once 'includes/footer.php'; ?>

