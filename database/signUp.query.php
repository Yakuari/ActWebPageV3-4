<?php 
require_once __DIR__. '/dbh.php';
class signUp extends Dbh {
    protected function setUser($uid, $pass, $email, $role) {
        $stmt = $this->connect()->prepare('INSERT INTO users (user_uid, user_pass, user_email, user_role) VALUES (?, ?, ?, ?)');
        $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
    
        if (!$stmt->execute([$uid, $hashedPwd, $email, $role])) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
    
        $stmt = null;
    }


    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare('SELECT user_uid FROM users WHERE user_uid = ? OR user_email = ?');
        if (!$stmt->execute([$uid, $email])) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        return $stmt->rowCount() === 0;
    }
    
}
?>
