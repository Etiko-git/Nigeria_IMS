<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigeria Immigration Portal - Login & Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="auth-container">
        <!-- Login Form -->
        <div class="form-container" id="login-form">
            <div class="form-header">
                <h2>Login to Your Account</h2>
                <p>Welcome back! Please enter your credentials</p>
            </div>
            
            <form class="auth-form">
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
                
                <button type="submit" class="btn btn-primary">Login</button>
                
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
            
            <form class="auth-form">
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
    </script>
</body>
</html>