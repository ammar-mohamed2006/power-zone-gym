
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

    <header class="navbar">
        <div class="logo">
            <img src="images/Bodybuilder_Fitness_Club_Black_Logo_1_-removebg-preview.png" alt="logo">
            <h1>POWER ZONE</h1>
        </div>
        <nav class="nav-links">
            <a href="dashboard.php" class="active"><i class="fas fa-th-large"></i> Dashboard</a>
            <a href="index.html"><i class="fas fa-home"></i> Home</a>
        </nav>
        <div class="nav-buttons">
            <a href="logout.php" class="login">Logout</a>
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

</body>
</html>