
<?php
session_start();
include("connect.php");

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION['email'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$user = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Power Zone Gym</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="dashboard-body">

    <!-- النافبار -->
<header class="navbar">
    <div class="logo">
        <img src="images/Bodybuilder_Fitness_Club_Black_Logo_1_-removebg-preview.png" alt="power gym logo">
        <h1>POWER ZONE</h1>
    </div>

    <nav class="nav-links">
        <a href="index.html"><i class="fas fa-home"></i> Home</a>
        <a href="about.html"><i class="fas fa-info-circle"></i> About</a>
        <a href="programs.html"><i class="fas fa-dumbbell"></i> Programs</a>
        <a href="plans.html"><i class="fas fa-clipboard-list"></i> plans</a>
        <a href="plans.html"><i class="fas fa-envelope"></i> contact</a>
    </nav>

    <div class="nav-buttons">
        <a href="http://localhost/gym-project/index.php" class="login">Login</a>
        <a href="http://localhost/gym-project/index.php" class="signup">Signin</a>
    </div>
</header>


    <div class="main-wrapper">
        <div class="container">
            <div class="welcome-box">
                <h1>Welcome Back, <span><?php echo $user['firstName']; ?></span></h1>
                <p>Ready to push your limits today?</p>
            </div>

            <div class="main-content">
                <div class="box card-membership">
                    <i class="fas fa-id-card"></i>
                    <h3>Membership</h3>
                    <p>Status: <span class="status-active">Active</span></p>
                    <p>Plan: Elite Power</p>
                </div>

                <div class="box card-goal">
                    <i class="fas fa-dumbbell"></i>
                    <h3>Today's Goal</h3>
                    <p>Focus: <strong>Chest Day</strong></p>
                    <p>Time: 06:00 PM</p>
                </div>

                <div class="box card-calories">
                    <i class="fas fa-fire"></i>
                    <h3>Calories</h3>
                    <p>Burned: 450 kcal</p>
                    <p>Goal: 600 kcal</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <footer class="main-footer">
    <diV class="footer-container">
        
    <div class="footer-column about">
    
        <h2 class="footer-logo">Power Zone <span>GYM</span></h2>
        <p>your journey to a stronger Version of yourself starts here . professional equipment and expert trainers .</p>
 
    </div>

    <diV class="footer-column links">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="plans.html">pricing plans</a></li>
            <li><a href="index.html#faq-section">FAQs</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>

      </diV>

      <div class="footer-column social">
        <h3>Follow Us</h3>
        <div class="social-icons">
            <a href="#" class="social-link">FB</a>
            <a href="#" class="social-link">IG</a>
            <a href="#" class="social-link">TW</a>
        </div>
      </div>
</div>
<div class="footer-bottom">
    <p>&copy; 2026 powerZonegym Gym. All Rights Reserved</p>
</div>
</footer>

</body>
</html>
