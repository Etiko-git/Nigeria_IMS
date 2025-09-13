<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigeria Immigration Portal - Registration</title>
    <link rel="stylesheet" href="css/reg-log.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <!-- Header -->
    <header>
        <div class="top-header">
            <div class="logo-container" onclick="window.location.href='index.html';" style="cursor: pointer;">
                <div class="logo">
                    <img src="img/Nigeria.jpg" alt="NIS Portal Logo" width="60" height="60">
                </div>
                <div class="logo-text">
                    <h1>NIGERIA IMMIGRATION SERVICE</h1>
                    <span>OFFICIAL E-SERVICES PORTAL</span>
                </div>
            </div>
            <div class="auth-buttons">
                <button class="btn btn-outline" onclick="window.location.href='login.html'">Login</button>
                <button class="btn btn-primary"><a href="reg-log.php?form=register">Create Account</a></button>
            </div>
        </div>
    </header>

    <div class="reg-log-body">
        <div class="auth-container">
            <!-- Registration Form -->
            <div class="form-container" id="register-form">
                <div class="form-header">
                    <h2>Create an Account</h2>
                    <p>Join us today! Fill in your details to get started</p>
                </div>

                <form class="auth-form" action="register.php" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="full-name">Full Name</label>
                        <input type="text" id="full-name" name="full_name" required>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm_password" required>
                    </div>

                    <div class="form-group">
                        <label class="checkbox-container">
                            <input type="checkbox" id="agree-terms" name="agree_terms" required>
                            <span class="checkmark"></span>
                            I agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Account</button>
                </form>
            </div>
        </div>
    </div>

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

</body>

</html>
