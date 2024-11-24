<?php

require_once __DIR__. '/../../vendor/autoload.php'; // PHPMailer autoload

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once __DIR__. '/../../database/signUp.query.php';


if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


class Admin extends signUp {
    private $email;
    private $uid;
    private $type;
    private $pass;

    public function __construct($email, $uid, $type, $pass) {
        $this->email = $email;
        $this->uid = $uid;
        $this->type = $type;
        $this->pass = $pass;
    }

    public function signupUser() {
        // Check for empty input
        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        // Validate username
        if ($this->invalidUid() == false) {
            header("location: ../index.php?error=username");
            exit();
        }

        // Validate email
        if ($this->invalidEmail() == false) {
            header("location: ../index.php?error=email");
            exit();
        }

        // Check if user ID or email is already taken
        if ($this->uidTakenChecker() == false) {
            header("location: ../index.php?error=usertaken");
            exit();
        }

        // Handle user authority based on type
        switch ($this->type) {
            case 'manager':
                $role = "manager";
                break;

            case 'user':
                $role = "user";
                break;

            default:
                header("location: ../index.php?error=invalidtype");
                exit();
        }

        // Generate and send OTP
        if ($this->sendOtp()) {
            $_SESSION['temp_user'] = [
                'uid' => $this->uid,
                'email' => $this->email,
                'role' => $role,
                'pass' => $this->pass
            ];
            header("location: ../database/verify_otp.php"); // Redirect to OTP verification page
            exit();
        } else {
            header("location: ../../index.php?error=otpfail");
            exit();
        }
    }

    private function emptyInput() {
        return !(empty($this->email) || empty($this->uid) || empty($this->type) || empty($this->pass));
    }

    private function invalidUid() {
        return preg_match("/^[a-zA-Z0-9]+$/", $this->uid);
    }

    private function invalidEmail() {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }

    private function uidTakenChecker() {
        return $this->checkUser($this->uid, $this->email);
    }

    private function sendOtp() {
        // Generate a random 6-digit OTP
        $otp = rand(100000, 999999);
        $_SESSION['otp'] = $otp; // Store OTP in session
        $_SESSION['otp_expiry'] = time() + 300; // OTP valid for 5 minutes

        // Send OTP via email using PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'dominguezstephen01@gmail.com'; // Your email
            $mail->Password = 'dbjt hnsz vpzo zvei'; // Your password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Email content
            $mail->setFrom('dominguezstephen01@gmail.com', 'NBI AYDUMO');
            $mail->addAddress($this->email); // Send to the user's email
            $mail->Subject = 'Your OTP Code';
            $mail->Body = "Hello,\n\nYour OTP code is: $otp\n\nThis code is valid for 5 minutes.";

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false; // Handle failure
        }
    }

    public function verifyOtp($inputOtp) {
        
        // Check if OTP exists in session and is valid
        if (isset($_SESSION['otp']) && $_SESSION['otp'] == $inputOtp) {
            if (time() <= $_SESSION['otp_expiry']) {
                unset($_SESSION['otp'], $_SESSION['otp_expiry']); // Clear OTP after successful verification

                // Register user after OTP verification
                $tempUser = $_SESSION['temp_user'];
                $this->setUser($tempUser['uid'], $tempUser['pass'], $tempUser['email'], $tempUser['role']);
                unset($_SESSION['temp_user']); // Clear temporary user data

                return true;
            } else {
                unset($_SESSION['otp'], $_SESSION['otp_expiry']); // Clear expired OTP
                return false; // OTP expired
            }
        }
        return false; // OTP invalid
    }
}
?>
