<?php

if (empty($_POST["name"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || strlen($_POST["password"]) < 8 || !preg_match("/[a-z]/i", $_POST["password"]) || !preg_match("/[0-9]/", $_POST["password"]) || $_POST["password"] !== $_POST["password_confirmation"]) {
    die("Invalid input");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (name, email, password_hash) VALUES (?, ?, ?)";
$stmt = $mysqli->stmt_init();
$stmt->prepare($sql);
$stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);

if ($stmt->execute()) {
    header("Location: signup-success.html");
    exit;
} else {
    if ($mysqli->errno === 1062) {
        die("Email already taken");
    } else {
        die("Database error: " . $mysqli->error);
    }
}
