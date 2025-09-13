<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigeria Immigration Portal - Dashboard</title>
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
        
        /* Header Styles */
        header {
            background: var(--primary);
            color: var(--light);
            padding: 1rem 2rem;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            cursor: pointer;
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
            overflow: hidden;
        }
        
        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .logo-text h1 {
            font-size: 1.5rem;
            line-height: 1.2;
        }
        
        .logo-text span {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .user-menu {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .user-welcome {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
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
        
        /* Dashboard Welcome */
        .dashboard-welcome {
            background: linear-gradient(135deg, var(--primary), #004d00);
            color: var(--light);
            padding: 3rem 2rem;
            text-align: center;
            animation: fadeIn 1s ease;
        }
        
        .welcome-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .welcome-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: slideInFromTop 1s ease;
        }
        
        .welcome-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            animation: slideInFromBottom 1s ease;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            max-width: 1000px;
            margin: 2rem auto 0;
        }
        
        .stat-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 1.5rem;
            backdrop-filter: blur(5px);
            transition: var(--transition);
            animation: fadeInUp 1s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.2);
        }
        
        .stat-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--accent);
        }
        
        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        /* Quick Actions */
        .quick-actions {
            padding: 4rem 2rem;
            background: var(--secondary);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--primary);
            position: relative;
            animation: fadeIn 1s ease;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--accent);
        }
        
        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .action-card {
            background: var(--light);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            animation: fadeInUp 1s ease;
        }
        
        .action-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .action-icon {
            background: var(--primary);
            color: var(--light);
            font-size: 2rem;
            padding: 1.5rem;
            text-align: center;
        }
        
        .action-content {
            padding: 1.5rem;
        }
        
        .action-content h3 {
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .action-content p {
            margin-bottom: 1.5rem;
            color: #666;
        }
        
        .action-link {
            display: inline-block;
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .action-link:hover {
            transform: translateX(5px);
        }
        
        /* Recent Activities */
        .recent-activities {
            padding: 4rem 2rem;
            background: var(--light);
        }
        
        .activities-list {
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .activity-item {
            display: flex;
            align-items: center;
            padding: 1.5rem;
            border-bottom: 1px solid #eee;
            transition: var(--transition);
            animation: fadeInRight 1s ease;
        }
        
        .activity-item:hover {
            background: var(--secondary);
        }
        
        .activity-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: var(--primary);
            font-size: 1.2rem;
        }
        
        .activity-content {
            flex: 1;
        }
        
        .activity-content h4 {
            margin-bottom: 0.5rem;
            color: var(--primary);
        }
        
        .activity-date {
            font-size: 0.9rem;
            color: #666;
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
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideInFromTop {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideInFromBottom {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
            
            .user-menu {
                flex-direction: column;
                gap: 10px;
            }
            
            .nav-menu {
                flex-direction: column;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .actions-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="top-header">
            <div class="logo-container" onclick="window.location.href='index.php';">
                <div class="logo">
                    <img src="img/Nigeria.jpg" alt="NIS Portal Logo">
                </div>
                <div class="logo-text">
                    <h1>NIGERIA IMMIGRATION SERVICE</h1>
                    <span>OFFICIAL E-SERVICES PORTAL</span>
                </div>
            </div>
            <div class="user-menu">
                <div class="user-welcome">
                    <div class="user-avatar">
                        <?php echo strtoupper(substr(htmlspecialchars($_SESSION['full_name']), 0, 1)); ?>
                    </div>
                    <span>Welcome, <?php echo htmlspecialchars($_SESSION['full_name']); ?></span>
                </div>
                <div class="auth-buttons">
                    <button class="btn btn-outline" onclick="window.location.href='logout.php'">Logout</button>
                </div>
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
                <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fas fa-history"></i> Application History</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Dashboard Welcome -->
    <section class="dashboard-welcome">
        <div class="welcome-content">
            <h2>Welcome to Your Dashboard</h2>
            <p>Manage your immigration services and applications in one place</p>
        </div>
        
        <div class="stats-grid">
            <!-- <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-passport"></i>
                </div>
                <div class="stat-number">2</div>
                <div class="stat-label">Active Applications</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-number">5</div>
                <div class="stat-label">Completed Applications</div>
            </div> -->
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-number">1</div>
                <div class="stat-label">Pending Actions</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="stat-number">3</div>
                <div class="stat-label">Notifications</div>
            </div>
        </div>
    </section>
    
    <!-- Quick Actions -->
    <section class="quick-actions">
        <h2 class="section-title">Quick Actions</h2>
        <div class="actions-grid">
            <div class="action-card">
                <div class="action-icon">
                    <i class="fas fa-plus"></i>
                </div>
                <div class="action-content">
                    <h3>New Application</h3>
                    <p>Start a new passport or visa application process</p>
                    <a href="#" class="action-link">Start Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="action-card">
                <div class="action-icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="action-content">
                    <h3>Track Application</h3>
                    <p>Check the status of your existing applications</p>
                    <a href="#" class="action-link">Track Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="action-card">
                <div class="action-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="action-content">
                    <h3>Book Appointment</h3>
                    <p>Schedule an appointment at our office</p>
                    <a href="#" class="action-link">Schedule <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="action-card">
                <div class="action-icon">
                    <i class="fas fa-user-edit"></i>
                </div>
                <div class="action-content">
                    <h3>Update Profile</h3>
                    <p>Manage your personal information and documents</p>
                    <a href="#" class="action-link">Update <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Recent Activities -->
    <section class="recent-activities">
        <h2 class="section-title">Recent Activities</h2>
        <div class="activities-list">
            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fas fa-passport"></i>
                </div>
                <div class="activity-content">
                    <h4>Passport Application Submitted</h4>
                    <p>Your passport renewal application has been successfully submitted</p>
                    <div class="activity-date">2 hours ago</div>
                </div>
            </div>
            
            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="activity-content">
                    <h4>Visa Application Approved</h4>
                    <p>Your business visa application has been approved</p>
                    <div class="activity-date">1 day ago</div>
                </div>
            </div>
            
            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="activity-content">
                    <h4>Payment Received</h4>
                    <p>Payment for your visa application has been processed</p>
                    <div class="activity-date">3 days ago</div>
                </div>
            </div>
            
            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="activity-content">
                    <h4>Profile Updated</h4>
                    <p>You updated your contact information</p>
                    <div class="activity-date">5 days ago</div>
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
        // Add animations on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.stat-card, .action-card, .activity-item');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            animatedElements.forEach(element => {
                element.style.animationPlayState = 'paused';
                observer.observe(element);
            });
        });
    </script>
</body>
</html>