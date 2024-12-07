<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iron Forge Gym</title>
    <link rel="stylesheet" href="src/css/styles.css">
    <style>
        
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo-container">
                <a href="#home">
                <img src="src/css/images/logo.png" alt="logo" class="logo">
                </a>
                <span class="logo-name">Iron Forge Gym</span>
            </div>
            <div class="nav-container">
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#program">Program</a></li>
                    <li><a href="#subscription">Subscription</a></li>
                    <li><a href="#booking">Booking</a></li>
                    <li><a href="#about-us">About Us</a></li>
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
            <form action="config/system_config_signup.php" method="POST">
                <h2>Register Here</h2>
                <div class="form-element">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="form-element">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-element">
                    <input type="password" name="password" placeholder="Password" required>
                    <select name="type">
                        <option value="manager">Manager</option>
                        <option value="user">User</option>
                    </select><br>
                </div>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <main id="home">
        <section class="content">
            <h1>Welcome to Iron Forge Gym,</h1>
            <p>Your fitness journey starts here. From effortless class bookings to personalized progress tracking,
            we've got everything you need to stay on top of your game.
            Explore, engage, and unlock your full potential.
            Remember, strong today, stronger tomorrow!</p>
        </section>
    </main>

    <script src="src/js/script1.js"></script>

    <!-- Program Section -->
    <div class="program-title" id="program">
            <h1>Iron Forge Gym Programs</h1>
        </div>
        <section class="program-section">
            <div class="program-link">
            <a href="bodybuilding.php" class="link">
                <h1> Bodybuilding Programs</h1>
                <p>Designed to help you build muscle, improve strength, and sculpt your physique with tailored workouts and expert guidance.</p>
            </a>

            <a href="fitness.php" class="link">
                <h1>Fitness Challenges</h1>
                <p>Engaging and fun competitions that motivate you to break barriers, improve performance, and achieve milestones.</p>
            </a>

            <a href="weightloss.php" class="link">
                <h1>Weight Loss Programs</h1>
                <p>Focused on shedding pounds and boosting confidence through customized training, balanced nutrition, and ongoing support.</p>
            </a>
        </div>
        </section>

        <div class="subscription-link" id="subscription">
        <h1>SUBSCRIPTION PLAN AND PRICING</h1>

        <!-- Slider container for subscription plans -->
        <div class="slider">
            <!-- Slider Content (All Subscription Plans) -->
            <div class="slider-content">
                <!-- 3 Months Subscription -->
                <div class="subscription">
                    <h2>Bronze Subscription</h2>
                    <h3>Core Power Membership</h3>
                    <p>Includes:</p>
                    <ul>
                        <li>Cardio Machines</li>
                        <li>Weights</li>
                        <li>Basic Equipment</li>
                    </ul>
                    <p>Additional Charges</p>
                    <ul>
                        <li>None or small fee for classes</li>
                    </ul>
                    <div class="price">
                        <p>Total Discount: 500</p>
                        <p>Original Price: 1000</p>
                        <p>Discount Price: 500</p>
                    </div>
                    <form action="./buy-subscription.php" method="get">
                        <button type="submit" value="3">Buy</button>
                    </form>
                </div>

                <!-- 6 Months Subscription -->
                <div class="subscription">
                    <h2>Silver Subscription</h2>
                    <h3>Strength & Stamina Pass</h3>
                    <p>Includes:</p>
                    <ul>
                        <li>All Gym Access</li>
                        <li>Unlimited classes (e.g., yoga, spinning)</li>
                    </ul>
                    <p>Additional Charges</p>
                    <ul>
                        <li>Personal training, massage, or specialty services may cost extra</li>
                    </ul>
                    <div class="price">
                        <p>Total Discount: 1400</p>
                        <p>Original Price: 2700</p>
                        <p>Discount Price: 1400</p>
                    </div>
                    <form action="./buy-subscription.php" method="get">
                        <button type="submit" value="6">Buy</button>
                    </form>
                </div>

                <!-- 1 Year Subscription -->
                <div class="subscription">
                    <h2>Gold Subscription</h2>
                    <h3>Empowerment Essentials Package</h3>
                    <p>Includes:</p>
                    <ul>
                        <li>VIP access to events</li>
                        <li>Priority booking for classes</li>
                        <li>All services (classes, personal training, amenities)</li>
                    </ul>
                    <p>Additional Charges</p>
                    <ul>
                        <li>Sometimes still applies for very exclusive services</li>
                    </ul>
                    <div class="price">
                        <p>Total Discount: 2500</p>
                        <p>Original Price: 5000</p>
                        <p>Discount Price: 2500</p>
                    </div>
                    <form action="./buy-subscription.php" method="get">
                        <button type="submit" value="12">Buy</button>
                    </form>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button class="arrow left" onclick="moveSlide(-1)">&#10094;</button>
            <button class="arrow right" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </div>

    <script>
        // JavaScript to control slider movement
        let currentIndex = 0;

        function moveSlide(direction) {
            const sliderContent = document.querySelector('.slider-content');
            const totalSlides = document.querySelectorAll('.subscription').length;

            currentIndex += direction;

            // Loop back to the first or last slide when reaching the end
            if (currentIndex < 0) {
                currentIndex = totalSlides - 1;
            } else if (currentIndex >= totalSlides) {
                currentIndex = 0;
            }

            const newTransformValue = -currentIndex * 100; // Move to the next slide
            sliderContent.style.transform = `translateX(${newTransformValue}%)`;
        }
    </script>



<div class="about-us-title" id="about-us">
    <h1>ABOUT US</h1>
</div>

<section class="about-us-container">
    <div class="about-us-story">
        <h2>OUR STORY</h2>
        <p>
            Established in 2024, Iron <br> Forge Gym  started as a <br> small community gym  with <br> a big dream:
            to make <br> high-quality fitness <br> accessible to everyone. <br> Today, we’ve grown into <br> a vibrant hub for
            fitness <br> enthusiasts of all levels,<br> offering state-of-the-art <br> facilities and a supportive <br> environment.
        </p>
    </div>


    <div class="about-us-join">
        <h2>JOIN OUR COMMUNITY</h2>
        <p>
            At Iron Forge Gym, <br> you’re not just a member; <br> you’re part of a family. <br>
            We’re here to guide, <br> motivate, and celebrate <br> your progress every step <br> of the way.
            Whether <br> you're a beginner <br> or a seasoned athlete, <br> we have something <br> for everyone.
        </p>
    </div>

    

    <div class="about-us-contacts">
        <h2>CONTACT US</h2>
        <p><strong>Phone:</strong> +1 800 123 4567</p>
        <p><strong>Email:</strong> contact@ironforgegym.com</p>
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank">
                <img src="src/css/images/fb_logo.png" alt="Facebook" width="30px">
            </a>
            <a href="https://www.youtube.com" target="_blank">
                <img src="src/css/images/yt_logoo.png" alt="YouTube" width="30px">
            </a>
            <a href="https://www.instagram.com" target="_blank">
                <img src="src/css/images/ig_logo.png" alt="Instagram" width="30px">
            </a>
            <a href="https://twitter.com" target="_blank">
                <img src="src/css/images/tt_logo.png" alt="Twitter" width="30px">
            </a>
        </div>
    </div>
</section>

</body>
</html>