<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Program</title>
    <link rel="stylesheet" href="../src/css/fitness.css">


</head>

<header>
        <nav>
            <div class="logo-container">
                <img src="../src/css/images/logo.png" alt="logo" class="logo">
                <span class="logo-name">Iron Forge Gym</span>
            </div>
            <div class="nav-container">
                <ul class="nav-links">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../index.php#program">Program</a></li>
                    <li><a href="../index.php#subscription">Subscription</a></li>
                    <li><a href="../index.php#booking">Booking</a></li>
                    <li><a href="../index.php#about-us">About Us</a></li>
                </ul>
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
            <form action="config/system_config_signIn.php" method="POST">
                <h2>Sign In</h2>
                <div class="form-element">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-element">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" name="submit">Sign In</button>
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
            <form action="config/system_config_signup.php" method="POST">
                <h2>Register Here</h2>
                <div class="form-element">
                    <input type="text" name="uid" placeholder="Username" required>
                </div>
                <div class="form-element">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-element">
                    <input type="password" name="password" placeholder="Password" required>
                    <select name="type">
                        <option value="manager">Manager</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select><br>
                </div>
                <div class="form-element">
                    <label for="months">How many Months:</label>
                    <input type="number" name="months" placeholder="Enter how many months" min="1" required>
                </div>
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
    </div>

    


<body>
    <div class="fitness-title">
        <h1>Fitness Transformation Programs</h1>
        <p>Choose a path tailored to your fitness journey with focused programs designed <br>
        to help you lose weight, build muscle, or enhance athletic performance. Start transforming today!</p>
    </div>

    <div class="fitness-choices">
        <div>
            <h1>Weight Loss Intensive</h1>
            <p>Comprehensive 12-week program combining high-intensity
            interval training, metabolic conditioning, and personalized nutrition planning
            to accelerate fat loss and boost metabolism.</p>
        </div>

        <div>
            <h1>Muscle Building</h1>
            <p>Structured strength training program focused on progressive overload,
            optimal muscle hypertrophy, and strategic nutrition to help you build lean muscle mass effectively.</p>
        </div>

        <div>
            <h1>Athletic Performance</h1>
            <p>>Advanced training designed for athletes and fitness enthusiasts to improve
            strength, speed, agility, and overall athletic performance through periodized training methods.</p>
        </div>
    </div>

    <script src="../src/js/script1.js"></script>

</body>
</html>
