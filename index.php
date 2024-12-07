<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up and Sign In</title>
</head>
<body>
    <h1>Sign Up</h1> <br>
    <form action="config/system_config_signup.php" method="POST">
        <input type="text" name="email" placeholder="Enter Email" required> <br>
        <input type="text" name="uid" placeholder="Enter Username" required> <br>
        <input type="password" name="password" placeholder="Enter Password" required> <br>
        <select name="type" required>
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
            <option value="user">User</option>
        </select> <br>
        How many Months: 
        <input type="number" name="months" placeholder="Enter how many months" min="1" required> <br>
        
        <input type="submit" name="submit">
    </form> <br>

    <h1>Sign In</h1>
    <form action="config/system_config_signIn.php" method="POST">
        <input type="text" name="email" placeholder="Enter Email" required> <br>
        <input type="password" name="password" placeholder="Enter Password" required><br>
        <input type="submit" name="submit">
    </form>

    <div>
        <a href="index.php">Back to Home</a>
    </div>
</body>
</html>
