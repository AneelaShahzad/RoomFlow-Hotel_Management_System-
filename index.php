<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../HotelManagementSystem/CSS/Customer.css">
</head>
<body>

<section class="hero-section text-light d-flex flex-column" id="Home" style="background: url('Assets/Hotel.avif') no-repeat center center/cover; height: 100vh; position: relative;">

  <div class="hero-overlay"></div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold fs-3 heading" href="#">Grand Palace Hotel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item me-4"><a class="nav-link" href="#Home">Home</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#About">About</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#Rooms">Rooms</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#Dining">Dining</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#Facilities">Facilities</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#Contact">Contact</a></li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item me-4"><a class="nav-link" href="login.php">Login</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="register.php">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container text-center hero-content flex-grow-1 d-flex flex-column justify-content-center">
    <h1 class="display-4 fw-bold mb-4">Grand Palace Hotel</h1>
    <p class="lead mb-5">Luxury • Comfort • Elegance</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="register.php" class="btn btn-lg btn-gold">Register Now</a>
      <a href="login.php" class="btn btn-lg btn-gold">Login</a>
    </div>
  </div>
</section>

<section class="container-fluid py-5" id="About" style="margin-top: 100px;">
    <div class="row align-items-center">


        <div class="col-lg-6 px-5">
            <h1 class="display-3 fw-bold text-charcoal">
                About Us
            </h1>

            <p class="lead my-4">
                Welcome to Grand Palace Hotel,
                where luxury meets comfort.
                Experience luxury, comfort, and world-class hospitality.
                Whether you're traveling for business or leisure,
                we ensure an unforgettable stay.<br><br>

                 Whether you're visiting for business, a family vacation, or a relaxing
    getaway, you'll enjoy world-class hospitality, exquisite dining, and
    unmatched comfort. At Grand Palace Hotel, we are committed to creating
    memorable experiences and ensuring that every stay is truly extraordinary.

     Enjoy beautifully designed rooms, exceptional dining experiences,
    modern facilities, and personalized service tailored to your needs.
    Located in the heart of the city, Grand Palace Hotel offers the perfect
    blend of sophistication, convenience, and comfort, making every moment
    of your stay truly special.
                
            </p>

            <a href="#Contact" class="btn btn-lg me-2 btn-gold">Contact Us</a>
            <a href="../Hotel Management System/Customer Panel/Rooms.html" class="btn btn-lg btn-gold">Explore Rooms</a>
        </div>


        <div class="col-lg-6">
            <div class="row g-3">

                <div class="col-12">
                    <img src="Assets/Hotel4.webp"
                         class="img-fluid rounded shadow"
                         alt="Hotel Image 1" style="height: 380px; width: 575px;">
                </div>

                <div class="col-12">
                    <img src="Assets/Hotel5.webp"
                         class="img-fluid rounded shadow"
                         alt="Hotel Image 2" style="height: 380px; width: 575px;">
                </div>

            </div>
        </div>

    </div>
</section>



<div class="container py-5 bg-light" id="Rooms" style="margin-top: 60px;">

    <div class="fw-bold text-center mb-5 text-charcoal">
        <h2>Our Rooms</h2>
    </div>

    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card h-100">

                <img src="Assets/LRoom2.jpg"
                     class="card-img-top img-fluid"
                     style="height: 220px; object-fit: cover;">

                <div class="card-body">
                    <h5 class="card-title">Double Rooms</h5>
                    <p class="card-text">Comfortable and Affordable.</p>
                </div>

                <div class="card-footer">
                    $250 / night
                </div>

            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card h-100">

                <img src="Assets/DRoom1.jpg"
                     class="card-img-top img-fluid"
                     style="height: 220px; object-fit: cover;">

                <div class="card-body">
                    <h5 class="card-title">Deluxe Room</h5>
                    <p class="card-text">Spacious and Modern.</p>
                </div>

                <div class="card-footer">
                    $300 / night
                </div>

            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card h-100">

                <img src="Assets/SRoom2.webp"
                     class="card-img-top img-fluid"
                     style="height: 220px; object-fit: cover;">

                <div class="card-body">
                    <h5 class="card-title">Suite Room</h5>
                    <p class="card-text">Premium Luxury Experience.</p>
                </div>

                <div class="card-footer">
                    $420 / night
                </div>

            </div>
        </div>

    </div>
</div>

<section class="py-5 text-center " id="Dining">
  <div class="container">
    <h2 class="fw-bold text-center mb-5 text-charcoal">Our Dining Experience</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <img src="Assets/Food1.jpg" class="img-fluid rounded shadow-sm" alt="Buffet" style="height: 240px;">
        <h5 class="mt-3">International Buffet</h5>
        <p class="text-muted">A world of flavors served fresh every day.</p>
      </div>
      <div class="col-md-4">
        <img src="Assets/Food2.jpg" class="img-fluid rounded shadow-sm" alt="Rooftop Café" style="height: 240px;">
        <h5 class="mt-3">Rooftop Café</h5>
        <p class="text-muted">Enjoy coffee and desserts with a stunning city view.</p>
      </div>
      <div class="col-md-4">
        <img src="Assets/Food3.jpg" class="img-fluid rounded shadow-sm" alt="Fine Dining" style="height: 240px;">
        <h5 class="mt-3">Fine Dining</h5>
        <p class="text-muted">Elegant atmosphere and gourmet dishes for special occasions.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light" id="Facilities">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold text-charcoal">Our Facilities</h2>
            <p class="text-muted">Everything you need for a comfortable stay</p>
        </div>

        <div class="row g-4 text-center">

            <!-- Free WiFi -->
            <div class="col-md-4 col-sm-6">
                <div class="p-4 bg-white shadow-sm rounded h-100">
                    <i class="bi bi-wifi fs-1 text-primary"></i>
                    <h5 class="mt-3">Free WiFi</h5>
                    <p class="text-muted">High-speed internet available throughout the hotel.</p>
                </div>
            </div>

            <!-- Swimming Pool -->
            <div class="col-md-4 col-sm-6">
                <div class="p-4 bg-white shadow-sm rounded h-100">
                    <i class="bi bi-water fs-1 text-info"></i>
                    <h5 class="mt-3">Swimming Pool</h5>
                    <p class="text-muted">Relax and enjoy our clean and luxury pool area.</p>
                </div>
            </div>

            <!-- Restaurant -->
            <div class="col-md-4 col-sm-6">
                <div class="p-4 bg-white shadow-sm rounded h-100">
                    <i class="bi bi-cup-hot fs-1 text-danger"></i>
                    <h5 class="mt-3">Restaurant</h5>
                    <p class="text-muted">Delicious meals prepared by expert chefs.</p>
                </div>
            </div>

            <!-- Parking -->
            <div class="col-md-4 col-sm-6">
                <div class="p-4 bg-white shadow-sm rounded h-100">
                    <i class="bi bi-p-square fs-1 text-success"></i>
                    <h5 class="mt-3">Parking</h5>
                    <p class="text-muted">Secure and spacious parking area for guests.</p>
                </div>
            </div>

            <!-- 24/7 Service -->
            <div class="col-md-4 col-sm-6">
                <div class="p-4 bg-white shadow-sm rounded h-100">
                    <i class="bi bi-clock-history fs-1 text-warning"></i>
                    <h5 class="mt-3">24/7 Service</h5>
                    <p class="text-muted">Our staff is available anytime for assistance.</p>
                </div>
            </div>

            <!-- Room Service -->
            <div class="col-md-4 col-sm-6">
                <div class="p-4 bg-white shadow-sm rounded h-100">
                    <i class="bi bi-bell fs-1 text-secondary"></i>
                    <h5 class="mt-3">Room Service</h5>
                    <p class="text-muted">Enjoy food and service delivered to your room.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="py-5 bg-light" id="reviews">
  <div class="container">
    <h2 class="text-center fw-bold mb-4 text-charcoal">Guest Reviews</h2>
    
    <div class="row">
      <!-- Review 1 -->
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm h-100 text-center">
          <div class="card-body">
            <img src="../Hotel Management System/Assets/p1.webp" alt="Guest 1" class="rounded-circle mb-3" width="100" height="100">
            <div class="reviews-stars mb-2">
              <i class="bi-star-fill text-warning"></i>
              <i class="bi-star-fill text-warning"></i>
              <i class="bi-star-fill text-warning"></i>
              <i class="bi-star-fill text-warning"></i>
              <i class="bi-star text-warning"></i>
            </div>
            <p class="card-text">“Amazing stay! The staff were friendly and the rooms were spotless. Highly recommend.”</p>
            <h6 class="fw-bold" style="color:#A67C52;">Sarah K.</h6>
          </div>
        </div>
      </div>

      <!-- Review 2 -->
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm h-100 text-center">
          <div class="card-body">
            <img src="../Hotel Management System/Assets/p2.webp" alt="Guest 2" class="rounded-circle mb-3" width="100" height="100">
            <div class="reviews-stars mb-2">
              <i class="bi-star-fill text-warning"></i>
              <i class="bi-star-fill text-warning"></i>
              <i class="bi-star-fill text-warning"></i>
              <i class="bi-star-fill text-warning"></i>
              <i class="bi-star-half text-warning"></i>
            </div>
            <p class="card-text">“Loved the food and ambience. The gold‑themed design makes it feel luxurious.”</p>
            <h6 class="fw-bold" style="color:#A67C52;">Ahmed R.</h6>
          </div>
        </div>
      </div>

      <!-- Review 3 -->
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm h-100 text-center">
          <div class="card-body">
            <img src="../Hotel Management System/Assets/p3.jpg" alt="Guest 3" class="rounded-circle mb-3" width="100" height="100">
            <div class="reviews-stars mb-2">
              <i class="bi-star-fill text-warning"></i>
              <i class="bi-star-fill text-warning"></i>
              <i class="bi-star-fill text-warning"></i>
              <i class="bi-star text-warning"></i>
              <i class="bi-star text-warning"></i>
            </div>
            <p class="card-text">“Perfect location and excellent service. Will definitely book again.”</p>
            <h6 class="fw-bold" style="color:#A67C52;">Emily T.</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="py-5 bg-light" id="Contact">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold text-charcoal">Contact Us</h2>
            <p class="text-muted">We are here to help you anytime</p>
        </div>

        <div class="row g-4">

            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="bg-white p-4 shadow-sm rounded">

                    <form>

                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="5" placeholder="Write your message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-gold w-100" data-bs-toggle="modal" data-bs-target="#messageModal">
  Send Message
</button>

                    </form>

                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-md-6">
                <div class="bg-white p-4 shadow-sm rounded h-100">

                    <h4 class="fw-bold mb-4 text-charcoal">Get in Touch</h4>

                    <p><i class="bi bi-geo-alt-fill text-bronze me-2"></i>
                        Grand Palace Hotel, Lahore, Pakistan
                    </p>

                    <p><i class="bi bi-telephone-fill text-bronze me-2"></i>
                        +92 300 1234567
                    </p>

                    <p><i class="bi bi-envelope-fill text-bronze me-2"></i>
                        info@grandpalacehotel.com
                    </p>

                    <hr>

<h5 class="fw-bold">Follow Us</h5>

<i class="bi bi-facebook fs-4 me-3 text-primary"></i>   <!-- Facebook blue -->
<i class="bi bi-instagram fs-4 me-3" style="color:#e03e74;"></i> <!-- Instagram pink -->
<i class="bi bi-twitter fs-4 me-3 text-info"></i>       <!-- Twitter light blue -->


                </div>
            </div>

        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="messageModalLabel">Message Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body text-center text-bronze">
        Thank you! 
      </div>
      <div class="modal-body text-center">
        Your message has been received. 
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-bronze" data-bs-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>

<footer class="text-white pt-5 pb-3 mt-5" style="background-color: #2C2C2C; color: aliceblue;">

    <div class="container">

        <div class="row">

            <!-- About -->
            <div class="col-md-4">
                <h5 class="fw-bold">Grand Palace Hotel</h5>
                <p class="text-white" >
                    Experience luxury, comfort, and world-class hospitality.
                    Your perfect stay awaits you.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4">
                <h5 class="fw-bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Rooms</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Facilities</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-4">
                <h5 class="fw-bold">Contact Us</h5>

                <p class="text-white mb-1">
                    <i class="bi bi-geo-alt-fill text-bronze me-2"></i>
                    Lahore, Pakistan
                </p>

                <p class="text-white mb-1" >
                    <i class="bi bi-telephone-fill text-bronze me-2"></i>
                    +92 300 1234567
                </p>

                <p class="text-white" >
                    <i class="bi bi-envelope-fill text-bronze me-2"></i>
                    info@grandpalacehotel.com
                </p>
            </div>

        </div>

        <hr class="border-secondary">

        <!-- Bottom -->
        <div class="text-center">
            <p class="mb-0 text-white" >
                © 2026 Grand Palace Hotel. All Rights Reserved.
            </p>
        </div>

    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>