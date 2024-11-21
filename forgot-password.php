<?php 
    include_once 'config/settings-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <main>
        <div class="wrapper-main">
            <section class="section-default">
            <h1>Reset your password</h1>
            <p>We will send email to reset your password</p>
                <form action="dashboard/authentication-class.php" method="POST">
                <input type="email" name="email" placeholder="ENTER YOUR EMAIL" Required>
                <br>
                <button type="submit" name="find_email"> SEND EMAIL </button>
            </form>
            </section>
        </div>
    </main>
</body>
</html>