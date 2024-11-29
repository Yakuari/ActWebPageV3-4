<?php 
    include_once 'config/settings-configuration.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="src/css/styles.css">
</head>
<body>
    <header>
        <nav>

        <div class="logo-container">
            <img src="src/css/images/logo1.png" alt="logo" class="logo">
        <span class="logo-name">Iron Forge Gym</span>
        </div>

            <div class="nav-container">
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li>Program</=></li>
                    <li>Subscription</a></li>
                    <li>Book Online</a></li>
                    <li>About Us</a></li>
                </ul>

                <!-- Navigation buttons for Login and Sign Up -->
                <div class="nav-buttons">
                    <button id="show-login">Sign in</button>
                    <button id="show-signup">Sign Up</button>
                </div>
            </div>


        </nav>
    </header>

    <!-- Login Popup -->
    <div class="popup login-popup">
        <div class="close-btn">&times;</div>
        <div class="form">
            <form action="dashboard/authentication-class.php" method="POST">
                <h2>Sign In</h2>
                <div class="form-element">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-element">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit">Sign In</button>
                <div class="form-element">
                    <a href="forgot-password.php">FORGOT PASSWORD?</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Signup Popup -->
    <div class="popup signup-popup">
        <div class="close-btn">&times;</div>
        <div class="form">
            <form action="dashboard/signup-class.php" method="POST">
                <h2>Register Here</h2>
                <div class="form-element">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="form-element">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-element">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <main>
        <section class="content">
            <h1>Welcome to Iron Forge Gym,</h1>
            <p>Your fitness journey starts here. From effortless class bookings to personalized progress tracking,
            we've got everything you need to stay on top of your game.
            Explore, engage, and unlock your full potential.
            Remember, strong today, stronger tomorrow!</p>
        </section>
    </main>

    <script src="src/js/script1.js"></script>
</body>
</html>
