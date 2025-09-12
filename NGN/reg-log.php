<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigeria Immigration Portal - Login & Registration</title>
    <link rel="stylesheet" href="css/reg-log.css">
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
                <button class="btn btn-outline"><a href="reg-log.php?form=login">Login</a></button>
                <button class="btn btn-primary"><a href="reg-log.php?form=register">Create Account</a></button>
            </div>
        </div>
    </header>

    <div class="reg-log-body">
        <div class="auth-container">
            <!-- Login Form -->
            <div class="form-container" id="login-form">
                <div class="form-header">
                    <h2>Login to Your Account</h2>
                    <p>Welcome back! Please enter your credentials</p>
                </div>

                <form class="auth-form" autocomplete="off" onsubmit="return handleLogin(event)">
                    <div class="form-group">
                        <label for="login-username">Username or Email</label>
                        <input type="text" id="login-username" required>
                    </div>

                    <div class="form-group">
                        <label for="login-password">Password</label>
                        <input type="password" id="login-password" required>
                    </div>

                    <div class="form-options">
                        <label class="checkbox-container">
                            <input type="checkbox" id="remember-me">
                            <span class="checkmark"></span>
                            Remember me
                        </label>
                        <a href="#" class="forgot-link">Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn btn-primary login-btn">Login</button>

                    <div class="form-footer">
                        <p>Don't have an account? <a href="#" id="show-register">Register Now</a></p>
                    </div>
                </form>
            </div>

            <!-- Registration Form -->
            <div class="form-container hidden" id="register-form">
                <div class="form-header">
                    <h2>Create an Account</h2>
                    <p>Join us today! Fill in your details to get started</p>
                </div>

                <form class="auth-form" autocomplete="off" onsubmit="return handleLogin(event)">
                    <div class="form-group">
                        <label for="full-name">Full Name</label>
                        <input type="text" id="full-name" required>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" required>
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" required>
                    </div>

                    <div class="form-group">
                        <label class="checkbox-container">
                            <input type="checkbox" id="agree-terms" required>
                            <span class="checkmark"></span>
                            I agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Account</button>

                    <div class="form-footer">
                        <p>Already have an account? <a href="#" id="show-login">Login Now</a></p>
                    </div>
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

    <script>
        // Toggle between login and registration forms
        document.getElementById('show-register').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('login-form').classList.add('hidden');
            document.getElementById('register-form').classList.remove('hidden');
        });

        document.getElementById('show-login').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('register-form').classList.add('hidden');
            document.getElementById('login-form').classList.remove('hidden');
        });

        function handleLogin(event) {
            event.preventDefault(); // Prevent the default form submission

            // Perform login validation or AJAX request here

            // Redirect to another page upon successful login
            window.location.href = 'login.html'; // Change to your desired URL
        }

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