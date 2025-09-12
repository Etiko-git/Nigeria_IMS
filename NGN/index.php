<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigeria Immigration Portal - Enhanced</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <!-- Header -->
    <header>
        <div class="top-header">
            <div class="logo-container" onclick="window.location.href='index.php';" style="cursor: pointer;">
                <div class="logo">
                    <img src="img/Nigeria.jpg" alt="NIS Portal Logo" width="60" height="60">
                </div>
                <div class="logo-text">
                    <h1>NIGERIA IMMIGRATION SERVICE</h1>
                    <span>OFFICIAL E-SERVICES PORTAL</span>
                </div>
            </div>
            <div class="auth-buttons">
                <button class="btn btn-outline" onclick="window.location.href='reg-log.php?form=login'">Login</button>
                <button class="btn btn-primary" onclick="window.location.href='reg-log.php?form=register'">Create Account</button>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <ul class="nav-menu">
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-passport"></i> Passport</a></li>
                <li><a href="#"><i class="fas fa-visa"></i> Visa</a></li>
                <li><a href="#"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a href="#"><i class="fas fa-newspaper"></i> News</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Slider -->
    <div class="hero-slider">
        <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1518638150340-f706e86654de?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
            <div class="slide-content">
                <h2>Welcome to Nigeria Immigration E-Services</h2>
                <p>Apply for passport, visa, and other immigration services online</p>
                <div class="search-box">
                    <input type="text" placeholder="What service are you looking for?">
                    <button>Search</button>
                </div>
            </div>
        </div>



        <div class="slide" style="background-image: url('img/flight.jpg');">
            <div class="slide-content">
                <h2>Efficient Passport Services</h2>
                <p>Fast and reliable passport application and renewal process</p>
                <div class="search-box">
                    <input type="text" placeholder="Search passport services...">
                    <button>Search</button>
                </div>
            </div>
        </div>

        <div class="slide" style="background-image: url('img/flag.jpg');">
            <div class="slide-content">
                <h2>Visa Application Made Easy</h2>
                <p>Streamlined visa application process for all categories</p>
                <div class="search-box">
                    <input type="text" placeholder="Search visa services...">
                    <button>Search</button>
                </div>
            </div>
        </div>

        <div class="slider-nav">
            <div class="slider-dot active" data-slide="0"></div>
            <div class="slider-dot" data-slide="1"></div>
            <div class="slider-dot" data-slide="2"></div>
        </div>
    </div>
    <!-- Notification Marquee -->
    <div class="notification">
        <div class="marquee">
            NOTIFICATION: Address Verification & Delivery Charge is applicable to Passport applications processed and paid in NIGERIA ONLY.
        </div>
    </div>
    <!-- Services Section -->
    <section class="services">
        <h2 class="section-title">Our Services</h2>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-passport"></i>
                </div>
                <div class="service-content">
                    <h3>Passport Application</h3>
                    <p>Apply for a new passport, renew or replace your lost passport online with our streamlined process.</p>
                    <a href="#" class="service-link">Apply Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-visa"></i>
                </div>
                <div class="service-content">
                    <h3>Visa Application</h3>
                    <p>Apply for different categories of visa including tourist, business, and residence permits.</p>
                    <a href="#" class="service-link">Apply Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-fingerprint"></i>
                </div>
                <div class="service-content">
                    <h3>e-Registration</h3>
                    <p>Register as a foreign national residing in Nigeria as required by immigration regulations.</p>
                    <a href="#" class="service-link">Register Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-id-card"></i>
                </div>
                <div class="service-content">
                    <h3>ECOWAS Residence Card</h3>
                    <p>Issued to citizens of other ECOWAS member states that are resident in Nigeria.</p>
                    <a href="#" class="service-link">Apply Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-building"></i>
                </div>
                <div class="service-content">
                    <h3>Free Zone Services</h3>
                    <p>Expatriates working in Free Zone-licensed companies can apply online for all Immigration facilities.</p>
                    <a href="#" class="service-link">Apply Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="service-content">
                    <h3>About NIS</h3>
                    <p>The Nigeria Immigration Service has witnessed series of changes since it was extracted from the Nigeria Police Force in 1958.</p>
                    <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news">
        <h2 class="section-title">Latest News & Updates</h2>
        <div class="news-grid">
            <div class="news-card">
                <div class="news-img" style="background-image: url('img/passport.jpg');"></div>
                <div class="news-content">
                    <div class="news-date">June 15, 2023</div>
                    <h3>New Passport Application Requirements</h3>
                    <p>The Nigeria Immigration Service has announced new requirements for passport applications effective from July 1st.</p>
                </div>
            </div>

            <div class="news-card">
                <div class="news-img" style="background-image: url('img/visa.jpg');"></div>
                <div class="news-content">
                    <div class="news-date">June 8, 2023</div>
                    <h3>Visa on Arrival Process Improved</h3>
                    <p>We have streamlined the visa on arrival process to make it more efficient for business travelers.</p>
                </div>
            </div>

            <div class="news-card">
                <div class="news-img" style="background-image: url('https://images.unsplash.com/photo-1516684732162-798a4f0b5ce4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');"></div>
                <div class="news-content">
                    <div class="news-date">May 30, 2023</div>
                    <h3>New Office Opening in Lagos Island</h3>
                    <p>A new immigration office has been opened in Lagos Island to serve the growing population in the area.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-grid">
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Passport Services</a></li>
                    <li><a href="#">Visa Services</a></li>
                    <li><a href="#">Citizenship</a></li>
                    <li><a href="#">Border Management</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Resources</h3>
                <ul class="footer-links">
                    <li><a href="#">Downloads</a></li>
                    <li><a href="#">Forms</a></li>
                    <li><a href="#">Requirements</a></li>
                    <li><a href="#">Fees</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Contact Us</h3>
                <ul class="contact-info">
                    <li><i class="fas fa-map-marker-alt"></i> NIS Headquarters, Area 1, Garki, Abuja</li>
                    <li><i class="fas fa-phone"></i> +234 812 345 6789</li>
                    <li><i class="fas fa-envelope"></i> info@immigration.gov.ng</li>
                    <li><i class="fas fa-clock"></i> Mon - Fri: 8:00AM - 4:00PM</li>
                </ul>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; 2023 Nigeria Immigration Service. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // JavaScript for the image slider
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slider-dot');
            let currentSlide = 0;
            let slideInterval;

            // Function to show a specific slide
            function showSlide(n) {
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));

                currentSlide = (n + slides.length) % slides.length;

                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
            }

            // Function to go to next slide
            function nextSlide() {
                showSlide(currentSlide + 1);
            }

            // Start the automatic slideshow
            function startSlideShow() {
                slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
            }

            // Stop the automatic slideshow
            function stopSlideShow() {
                clearInterval(slideInterval);
            }

            // Add click events to dots
            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    const slideIndex = parseInt(this.getAttribute('data-slide'));
                    showSlide(slideIndex);
                    stopSlideShow();
                    startSlideShow();
                });
            });

            // Pause slideshow when hovering over slider
            const slider = document.querySelector('.hero-slider');
            slider.addEventListener('mouseenter', stopSlideShow);
            slider.addEventListener('mouseleave', startSlideShow);

            // Start the slideshow
            startSlideShow();

            // Service cards hover effect
            const serviceCards = document.querySelectorAll('.service-card');

            serviceCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                    this.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.15)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
                });
            });

            // Auth buttons functionality

        });


        // Function to show the correct form based on URL parameters
        function showForm() {
            const urlParams = new URLSearchParams(window.location.search);
            const formType = urlParams.get('form');
            console.log(formType)

            if (formType === 'register') {
                document.getElementById('login-form').classList.add('hidden');
                document.getElementById('register-form').classList.remove('hidden');
            } else {
                document.getElementById('register-form').classList.add('hidden');
                document.getElementById('login-form').classList.remove('hidden');
            }
        }

        // Call the function on page load
        window.onload = showForm;
    </script>
</body>

</html>