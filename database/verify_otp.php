<?php
session_start();
require_once __DIR__. '/../dashboard/authentication/admin-class.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputOtp = $_POST['otp'];
    $admin = new Admin($_SESSION['temp_user']['email'], $_SESSION['temp_user']['uid'], $_SESSION['temp_user']['role'], $_SESSION['temp_user']['pass']);
    
    if ($admin->verifyOtp($inputOtp)) {
        echo "<script>alert('Registration successful! Redirecting...'); window.location.href = '../index.php';</script>";
    } else {
        echo "<script>alert('Invalid or expired OTP. Try again.'); window.location.href = 'verify_otp.php';</script>";
    }
}
?>
<form method="POST">
    <label for="otp">Enter OTP:</label>
    <input type="text" name="otp" id="otp" required>
    <button type="submit">Verify</button>
</form>
