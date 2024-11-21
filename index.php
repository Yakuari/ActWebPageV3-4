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
            <form action="dashboard/authentication-class.php" method="POST"> 
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
                <input type="email" name="email" placeholder="Email" required>
                <form name="testForm" action="passwordValidationController" method="post">
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="btn-signin">Sign-In!</button>
                <a href="forgot-password.php">Forgot password?</a>
            </form>
        </nav>
    </header>

    <main>
        <section class="content">
            <h1>roblos</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident illum sit dolorum ea ipsum consequatur corporis quae minima ex quisquam possimus porro, est dignissimos nulla consectetur. Voluptate distinctio tenetur cumque!</p>
        </section>

        <aside class="box-right">
            <h2>Register Here</h2>
            <form action="dashboard/authentication-class.php" method="POST"> 
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
                <input type="text" name="username" placeholder="Enter Username" required><br>
                <input type="email" name="email" placeholder="Enter Email" required><br>
                <input type="password" name="password" placeholder="Enter Password" required><br>
                <button type="submit" name="btn-signup">Sign-Up!</button>
            </form>
        </aside>
    </main>

    <footer>
        <p>&copy; 2024 Your Website | All Rights Reserved</p>
    </footer>
</body>
</html>
