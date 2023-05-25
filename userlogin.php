<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'C:/xampp/htdocs/InternshipPortal/PHPMailer-master/src/PHPMailer.php';
require 'C:/xampp/htdocs/InternshipPortal/PHPMailer-master/src/SMTP.php';
require 'C:/xampp/htdocs/InternshipPortal/PHPMailer-master/src/Exception.php';



// Start session on the web page
session_start();

// config.php

// Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('374443591875-7nl8m8ct4hoo5cqpgq4jbjk9v4k1f6ja.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/InternshipPortal/pages/student/');
$client->addScope("email");
$client->addScope("profile");

$hostname = "localhost";
$username = "root";
$password = "";
$database = "your_database_name";

$conn = mysqli_connect($hostname, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_num_rows($result) > 0) {
  // User already exists
  $userinfo = mysqli_fetch_assoc($result);
  $welcome_message = "Welcome, " . $userinfo['first_name'] . " " . $userinfo['last_name'];

  $token = $userinfo['token'];
} else {
  // User does not exist, insert into database
  $email = mysqli_real_escape_string($conn, $userinfo['email']);
  $first_name = mysqli_real_escape_string($conn, $userinfo['first_name']);
  $last_name = mysqli_real_escape_string($conn, $userinfo['last_name']);
  $gender = mysqli_real_escape_string($conn, $userinfo['gender']);
  $full_name = mysqli_real_escape_string($conn, $userinfo['full_name']);
  $picture = mysqli_real_escape_string($conn, $userinfo['picture']);
  $verified_email = mysqli_real_escape_string($conn, $userinfo['verifiedEmail']);
  $token = mysqli_real_escape_string($conn, $userinfo['token']);

  // Generate a random password
  $password = bin2hex(random_bytes(8));

  // Hash the password for security
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (email, password, first_name, last_name, gender, full_name, picture, verifiedEmail, token) 
          VALUES ('$email', '$hashed_password', '$first_name', '$last_name', '$gender', '$full_name', '$picture', '$verified_email', '$token')";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    $token = $userinfo['token'];
    
    // Send the generated password to the user via email or any other method
    
    // Example email sending code using PHPMailer library
    require_once 'path/to/PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer();
    $mail->isSMTP();
    // Configure your SMTP settings
    $mail->Host = 'your_smtp_host';
    $mail->SMTPAuth = true;
    $mail->Username = 'your_smtp_username';
    $mail->Password = 'your_smtp_password';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('from_email@example.com', 'Your Name');
    $mail->addAddress($email, $full_name);
    $mail->Subject = 'Welcome to the website';
    $mail->Body = 'Your password: ' . $password;
    
    if ($mail->send()) {
      echo 'User created. Email sent with password.';
    } else {
      echo 'User created. Failed to send email.';
    }
  } else {
    echo "User is not created";
    die();
  }
}
?>

