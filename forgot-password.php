<?php 
    include_once 'config/settings-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="src/css/styles2.css">
</head>
<body>
<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Forgot Password</h1>
            <p>We will send email for your new password</p>
            <form action="dashboard/authentication-class.php" method="POST">
                <input type="email" name="email" placeholder="Enter Email" Required>
                <br>
                <button type="submit" name="find_email"> Find Email </button>
            </form>
        </section>
    </div>
</main>
</body>
</html>