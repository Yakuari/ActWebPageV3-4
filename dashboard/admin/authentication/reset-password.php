<?php 
   require_once __DIR__ . "/../../../database/dbconnection.php";

   $database = new Database();
   $conn = $database->dbConnection();

   $stmt = $conn->prepare("SELECT * FROM user WHERE id = :id");
   $stmt->execute([
     ':id' => $_GET['id']  // Replace with the actual user ID you want to change the password for.
   ]);
   $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

   if ($_GET['tokencode'] !== $userRow['tokencode']){
        echo"<script> alert(\" Invalid Token Code \"); window.location.href = \"../../../ \"; </script>";
        exit();
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../src/css/styles2.css">
    <title>Reset Password</title>
    <style>
        main {
            background-image: url('../../../src/img/Arnold.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Change your password</h1>
            <p>Enter your new password</p>
            <form action="../../authentication-class.php" method="POST">
                <input type="password" name="newPass" placeholder="Password" Required>
                <input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
                <br>
                <button type="submit" name="change_pass"> Update Password </button>
            </form>
        </section>
    </div>
</main>
</body>
</html>