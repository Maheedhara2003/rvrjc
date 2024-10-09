<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Cultural Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }

        /* Make the navbar logo circular */
.navbar-brand img {
    border-radius: 50%;
    width: 50px;
    height: 50px; /* Ensure the image is a perfect square */
    object-fit: cover; /* Ensures the logo fits inside its container */
}


        .hero-section {
            background: url('event/sico website.gif') no-repeat center center/cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 1.25rem;
        }
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
        .event-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .event-card:hover {
            transform: translateY(-10px);
        }
        .gallery-item img {
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .gallery-item img:hover {
            transform: scale(1.05);
        }
        .testimonial-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }
        .testimonial-card img {
            border-radius: 50%;
            margin-bottom: 15px;
            width: 80px;
            height: 80px;
            object-fit: cover;
        }
        .latest-news .section-title {
    font-size: 2.5rem;
    font-weight: bold;
    color: #343a40;
}

.latest-news .section-subtitle {
    font-size: 1.1rem;
    color: #6c757d;
    margin-bottom: 2rem;
}

.latest-news .card-header {
    font-size: 1.25rem;
    font-weight: bold;
    text-align: center;
}

.latest-news .event-item {
    border-bottom: 1px solid #e0e0e0;
    padding-bottom: 10px;
    margin-bottom: 10px;
}

.latest-news .event-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.latest-news .event-title {
    font-size: 1.1rem;
    font-weight: 600;
}

.latest-news .event-date {
    font-size: 0.9rem;
    color: #6c757d;
}

.latest-news .btn {
    margin-top: 10px;
}

.bg-dark{

}

    </style>
</head>
<body>

<!-- Cultural Page Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <!-- Navbar Brand / Logo -->
        <a class="navbar-brand" href="index.php">
    <img src="https://rvrjcce.ac.in/literary/sicologo.jpg" alt="College Logo" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
    <span>Cultural Fest</span>
</a>

        
        <!-- Navbar Toggler for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#culturalNavbar" aria-controls="culturalNavbar" aria-expanded="false" aria-label="Toggle navigation" id="navbar-toggler-btn">
            <span class="navbar-toggler-icon"></span>
            <span class="close-icon" style="display:none;">&#10005;</span> <!-- Close Icon -->
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="culturalNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#events" style="color: white; text-decoration: none;">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery" style="color: white; text-decoration: none;">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#activities" style="color: white; text-decoration: none;">Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials" style="color: white; text-decoration: none;">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact" style="color: white; text-decoration: none;">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Custom JavaScript to handle Navbar toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const togglerBtn = document.getElementById('navbar-toggler-btn');
        const navbarNav = document.getElementById('culturalNavbar');
        const closeIcon = document.querySelector('.close-icon');
        const togglerIcon = document.querySelector('.navbar-toggler-icon');

        // Toggle the visibility of the icons and collapse the menu
        togglerBtn.addEventListener('click', function() {
            const isNavbarOpen = navbarNav.classList.contains('show');

            if (isNavbarOpen) {
                closeIcon.style.display = 'none';
                togglerIcon.style.display = 'block';
            } else {
                closeIcon.style.display = 'block';
                togglerIcon.style.display = 'none';
            }
        });

        // When the close icon is clicked, collapse the navbar and switch back the icons
        closeIcon.addEventListener('click', function() {
            navbarNav.classList.remove('show');
            closeIcon.style.display = 'none';
            togglerIcon.style.display = 'block';
        });
    });
</script>

    <!-- Hero Section -->
    <div class="hero-section">
       
    </div>

    <!-- Events Carousel -->
    <div id="eventsCarousel" class="carousel slide my-1" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="event/7.png" class="d-block w-100" alt="Event 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Music Night</h5>
                    <p>Enjoy the rhythm and melody with live performances from our talented students.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="event/8.png" class="d-block w-100" alt="Event 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Dance Competition</h5>
                    <p>Witness electrifying performances from various dance groups.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="event/9.png" class="d-block w-100" alt="Event 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Art Exhibition</h5>
                    <p>Discover the artistic talents of our students in this captivating exhibition.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#eventsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#eventsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Latest News Section -->
<section class="latest-news py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="section-title">Latest News & Events</h2>
                <p class="section-subtitle">Stay updated with our latest events</p>
            </div>
        </div>

        <div class="row">
            <!-- Upcoming Events -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Upcoming Events</h5>
                    </div>
                    <div class="card-body">
                        <!-- Event Item 1 -->
                        <div class="event-item mb-3">
                            <h6 class="event-title">Tech Symposium 2024</h6>
                            <p class="event-date">Date: October 15, 2024</p>
                            <p class="event-description">Join us for an exciting tech symposium featuring industry experts.</p>
                            <a href="#" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                        <!-- Event Item 2 -->
                        <div class="event-item mb-3">
                            <h6 class="event-title">Annual Cultural Fest</h6>
                            <p class="event-date">Date: November 5, 2024</p>
                            <p class="event-description">Get ready for a cultural extravaganza with performances and workshops.</p>
                            <a href="#" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ongoing Events -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-warning text-white">
                        <h5 class="card-title mb-0">Ongoing Events</h5>
                    </div>
                    <div class="card-body">
                        <!-- Event Item 1 -->
                        <div class="event-item mb-3">
                            <h6 class="event-title">Hackathon 2024</h6>
                            <p class="event-date">Date: September 20 - 22, 2024</p>
                            <p class="event-description">Participate in our coding challenge and showcase your skills.</p>
                            <a href="#" class="btn btn-sm btn-warning">Join Now</a>
                        </div>
                        <!-- Event Item 2 -->
                        <div class="event-item mb-3">
                            <h6 class="event-title">Art Exhibition</h6>
                            <p class="event-date">Date: September 18 - 25, 2024</p>
                            <p class="event-description">Explore the creativity of our students in this ongoing art exhibition.</p>
                            <a href="#" class="btn btn-sm btn-warning">Visit Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Past Events -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="card-title mb-0">Past Events</h5>
                    </div>
                    <div class="card-body">
                        <!-- Event Item 1 -->
                        <div class="event-item mb-3">
                            <h6 class="event-title">Alumni Meet 2024</h6>
                            <p class="event-date">Date: August 12, 2024</p>
                            <p class="event-description">A wonderful gathering of our alumni community sharing memories.</p>
                            <a href="#" class="btn btn-sm btn-secondary">View Photos</a>
                        </div>
                        <!-- Event Item 2 -->
                        <div class="event-item mb-3">
                            <h6 class="event-title">Science Fair 2024</h6>
                            <p class="event-date">Date: July 30, 2024</p>
                            <p class="event-description">A showcase of innovative projects and experiments by our students.</p>
                            <a href="#" class="btn btn-sm btn-secondary">View Highlights</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Featured Activities Section -->
    <div class="container my-5" id="activities">
        <h2 class="text-center mb-4">Featured Activities</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="event-card p-4 text-center">
                    <img src="event/music club logo (1).png" class="img-fluid mb-3" alt="Drama">
                    <h5>Drama Club</h5>
                    <p>Engage in captivating performances and dramatic expressions.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-card p-4 text-center">
                    <img src="event/music club logo.png" class="img-fluid mb-3" alt="Music">
                    <h5>Music Club</h5>
                    <p>Showcase your musical talents in various genres and styles.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-card p-4 text-center">
                    <img src="event/music club logo (2).png" class="img-fluid mb-3" alt="Art">
                    <h5>Book Club</h5>
                    <p>Unlock your creativity with painting, sketching, and more!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <div class="container my-5" id="gallery">
        <h2 class="text-center mb-4">Gallery</h2>
        <div class="row g-4">
            <div class="col-md-4 gallery-item">
                <img src="event/BL8A1321.JPG" class="img-fluid" alt="Gallery 1">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="event/BL8A2927.JPG" class="img-fluid" alt="Gallery 2">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="event/BL8A2995.JPG" class="img-fluid" alt="Gallery 3">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="event/BL8A3120.JPG" class="img-fluid" alt="Gallery 4">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="event/BL8A3519.JPG" class="img-fluid" alt="Gallery 5">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="event/BL8A3723.JPG" class="img-fluid" alt="Gallery 6">
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Student Testimonials</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="testimonial-card p-4">
                    <img src="https://via.placeholder.com/80" alt="Student 1">
                    <h5>Student 1</h5>
                    <p>"The cultural fest was a fantastic experience, filled with joy and learning."</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card p-4">
                    <img src="https://via.placeholder.com/80" alt="Student 2">
                    <h5>student  2</h5>
                    <p>"I loved participating in the music events and meeting talented artists."</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card p-4">
                    <img src="https://via.placeholder.com/80" alt="Student 3">
                    <h5>Student 3</h5>
                    <p>"The cultural fest is a wonderful platform to showcase our talents."</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-center text-md-start">
        <div class="row text-center text-md-start">
            <!-- About Us Column -->
            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">About Us</h5>
                <p>
                    Our college cultural fest is a vibrant celebration of creativity and talent, providing a platform for students to showcase their artistic abilities. Join us and be a part of this amazing journey.
                </p>
            </div>

            <!-- Links Column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Quick Links</h5>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;">Home</a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;">Events</a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;">Gallery</a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;">Contact Us</a>
                </p>
            </div>

            <!-- Contact Us Column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact Us</h5>
                <p>
                    <i class="fas fa-home mr-3"></i> Chowdavaram,
GUNTUR-522 019,
                </p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> rvrjcce.ac.in
                </p>
                <p>
                    <i class="fas fa-phone mr-3"></i> +91 9494414529
                </p>
                
            </div>

            <!-- Social Media Column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Follow Us</h5>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;">
                        <i class="fab fa-facebook-f"></i> Facebook
                    </a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;">
                        <i class="fab fa-twitter"></i> Twitter
                    </a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;">
                        <i class="fab fa-instagram"></i> Instagram
                    </a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;">
                        <i class="fab fa-linkedin"></i> LinkedIn
                    </a>
                </p>
            </div>
        </div>

        <hr class="mb-4">
        
        <!-- Copyright -->
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-8">
                <p class="text-center text-md-start">© 2024 All Rights Reserved by:
                    <a href="#" class="text-warning" style="text-decoration: none;">
                        <strong>College Cultural Fest</strong>
                    </a>
                </p>
            </div>
            <div class="col-md-5 col-lg-4">
               
            </div>
        </div>
    </div>
</footer>

<!-- Add Font Awesome for social media icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
