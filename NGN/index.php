<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigeria Immigration Portal - Enhanced</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #006400;
            --secondary: #f8f9fa;
            --accent: #ff8c00;
            --text: #333;
            --light: #fff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: var(--text);
            line-height: 1.6;
        }
        
        /* Notification Marquee */
        .notification {
            background: #ffebee;
            color: #d32f2f;
            padding: 12px 0;
            font-weight: 600;
            overflow: hidden;
            position: relative;
            border-bottom: 2px solid #d32f2f;
        }
        
        .marquee {
            white-space: nowrap;
            display: inline-block;
            animation: marquee 20s linear infinite;
            padding-left: 100%;
        }
        
        .marquee:hover {
            animation-play-state: paused;
        }
        
        @keyframes marquee {
            0% { transform: translate(0, 0); }
            100% { transform: translate(-100%, 0); }
        }
        
        /* Header Styles */
        header {
            background: var(--primary);
            color: var(--light);
            padding: 1rem 2rem;
            box-shadow: var(--shadow);
        }
        
        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
        }
        
        .logo {
            width: 60px;
            height: 60px;
            background: var(--light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-weight: bold;
            color: var(--primary);
            font-size: 12px;
            text-align: center;
        }
        .logo img {
    border-radius: 50%;
    object-fit: contain;
}
        .logo-text h1 {
            font-size: 1.5rem;
            line-height: 1.2;
        }
        
        .logo-text span {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .auth-buttons {
            display: flex;
            gap: 10px;
        }
        
        .btn {
            padding: 8px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--light);
            color: var(--light);
        }
        
        .btn-outline:hover {
            background: var(--light);
            color: var(--primary);
        }
        
        .btn-primary {
            background: var(--accent);
            color: var(--light);
        }
        
        .btn-primary:hover {
            background: #e67e00;
        }
        
        /* Navigation */
        nav {
            background: var(--light);
            box-shadow: var(--shadow);
        }
        
        .nav-container {
            display: flex;
            justify-content: center;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
        }
        
        .nav-menu li {
            position: relative;
        }
        
        .nav-menu a {
            display: block;
            padding: 15px 20px;
            text-decoration: none;
            color: var(--text);
            font-weight: 500;
            transition: var(--transition);
        }
        
        .nav-menu a:hover {
            background: var(--secondary);
            color: var(--primary);
        }
        
        .nav-menu a i {
            margin-right: 8px;
        }
        
        /* Hero Section with Slider */
        .hero-slider {
            position: relative;
            height: 500px;
            overflow: hidden;
        }
        
        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .slide.active {
            opacity: 1;
        }
        
        .slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 100, 0, 0.7), rgba(0, 100, 0, 0.8));
        }
        
        .slide-content {
            position: relative;
            z-index: 1;
            color: var(--light);
            text-align: center;
            max-width: 800px;
            padding: 0 2rem;
        }
        
        .slide-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .slide-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .search-box {
            background: var(--light);
            border-radius: 50px;
            padding: 5px;
            display: flex;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .search-box input {
            flex: 1;
            border: none;
            padding: 15px 20px;
            border-radius: 50px;
            outline: none;
            font-size: 1rem;
        }
        
        .search-box button {
            background: var(--accent);
            color: var(--light);
            border: none;
            border-radius: 50px;
            padding: 15px 30px;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .search-box button:hover {
            background: #e67e00;
        }
        
        .slider-nav {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 2;
        }
        
        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: var(--transition);
        }
        
        .slider-dot.active {
            background: var(--light);
            transform: scale(1.2);
        }
        
        /* Services Section */
        .services {
            padding: 4rem 2rem;
            background: var(--secondary);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--primary);
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .service-card {
            background: var(--light);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        
        .service-icon {
            background: var(--primary);
            color: var(--light);
            font-size: 2rem;
            padding: 1.5rem;
            text-align: center;
        }
        
        .service-content {
            padding: 1.5rem;
        }
        
        .service-content h3 {
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .service-content p {
            margin-bottom: 1.5rem;
            color: #666;
        }
        
        .service-link {
            display: inline-block;
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
        }
        
        .service-link:hover {
            text-decoration: underline;
        }
        
        /* News Section */
        .news {
            padding: 4rem 2rem;
            background: var(--light);
        }
        
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .news-card {
            border: 1px solid #eee;
            border-radius: 10px;
            overflow: hidden;
            transition: var(--transition);
        }
        
        .news-card:hover {
            box-shadow: var(--shadow);
        }
        
        .news-img {
            height: 200px;
            background: #ddd;
            background-size: cover;
            background-position: center;
        }
        
        .news-content {
            padding: 1.5rem;
        }
        
        .news-date {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }
        
        .news-content h3 {
            margin-bottom: 1rem;
            color: var(--primary);
        }
        
        /* Footer */
        footer {
            background: var(--primary);
            color: var(--light);
            padding: 3rem 2rem;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background: var(--accent);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: var(--light);
            text-decoration: none;
            opacity: 0.8;
            transition: var(--transition);
        }
        
        .footer-links a:hover {
            opacity: 1;
            padding-left: 5px;
        }
        
        .contact-info {
            list-style: none;
        }
        
        .contact-info li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }
        
        .contact-info i {
            margin-right: 10px;
            color: var(--accent);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: var(--light);
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background: var(--accent);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            margin-top: 3rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0.8;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .top-header {
                flex-direction: column;
                text-align: center;
            }
            
            .logo-container {
                margin-bottom: 1rem;
            }
            
            .nav-menu {
                flex-direction: column;
            }
            
            .slide-content h2 {
                font-size: 2rem;
            }
            
            .slide-content p {
                font-size: 1rem;
            }
            
            .search-box {
                flex-direction: column;
                border-radius: 10px;
            }
            
            .search-box input {
                border-radius: 10px 10px 0 0;
            }
            
            .search-box button {
                border-radius: 0 0 10px 10px;
            }
            
            .hero-slider {
                height: 600px;
            }
        }
    </style>
</head>
<body>
    
    
    <!-- Header -->
    <header>
        <div class="top-header">
            <div class="logo-container">
    <div class="logo">
        <img src="img/Nigeria.jpg" alt="NIS Portal Logo" width="60" height="60">
    </div>
    <div class="logo-text">
        <h1>NIGERIA IMMIGRATION SERVICE</h1>
        <span>OFFICIAL E-SERVICES PORTAL</span>
    </div>
</div>
            <div class="auth-buttons">
                <button class="btn btn-outline">Login</button>
                <button class="btn btn-primary">Create Account</button>
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
            const loginBtn = document.querySelector('.btn-outline');
            const signupBtn = document.querySelector('.btn-primary');
            
            loginBtn.addEventListener('click', function() {
                alert('Login feature would open here');
            });
            
            signupBtn.addEventListener('click', function() {
                alert('Registration form would open here');
            });
        });
    </script>
</body>
</html>