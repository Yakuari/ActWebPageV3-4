<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sign Up</h1> <br>
    <form action="config/system_config_signup.php" method="POST">
        <input type="text" name="email" placeholder="Enter Email"> <br>
        <input type="text" name="uid" placeholder="Enter Username"> <br>
        <input type="password" name="password" placeholder="Enter Password"> <br>
        <select name="type">
            <option value="manager">manager</option>
            <option value="user">user</option>
        </select>
            <input type="submit" name="submit">

    </form> <br>

    <h1>Sign In</h1>

    <form action="config/system_config_signIn.php" method="POST">
        <input type="text" name="email" placeholder="Enter Email"> <br>
        <input type="password" name = "password" placeholder="Enter Password"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>