<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weightloss Program</title>
    <link rel="stylesheet" href="../src/css/weightloss.css">


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
    <div class="weightloss-title">
        <h1>WeightLoss</h1>
        <p>A successful weight loss program typically involves three important components:</p>
    </div>

    <div class="weightloss-choices">
        <div>
            <h1>Healthy Diet</h1>
            <p>A balanced diet is key to losing weight. This means consuming fewer
            calories than you burn while ensuring your body gets the nutrients it needs.
            Focus on whole foods, including fruits, vegetables, lean proteins, whole
            grains, and healthy fats. Reducing processed foods, sugars, and excessive fats is crucial..</p>
        </div>

        <div>
            <h1>Regular Physical Activity</h1>
            <p>Exercise helps burn calories and build muscle, which increases your metabolism.
                Aim for a combination of aerobic exercises (like walking, running, or cycling)
                and strength training (such as weightlifting or bodyweight exercises).</p>
        </div>

        <div>
            <h1>Behavioral Changes and Mindset</h1>
            <p>Weight loss is not just about diet and exercise, it's about making
                lasting lifestyle changes. This includes setting realistic goals, managing stress,
                getting enough sleep, and developinga positive attitude towards your progress.
                Tracking your food, activity, and progress can also help maintain motivation.</p>
        </div>
    </div>

    <script src="../src/js/script1.js"></script>

</body>
</html>
