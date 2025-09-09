<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // TODO: Save user data to database here (not shown)

    // Generate verification code
    $verificationcode = rand(100000, 999999);

    // Store code and email in session (or database)
    $_SESSION['verification_code'] = $verificationcode;
    $_SESSION['user_email'] = $email;

    // Send verification email
    $_SESSION['user_email'] = $email; // Pass email to mail.php
    include 'pluggins/PHPMailer/mail.php';
    exit; // Temporarily stop before redirect

    // Redirect to verification page
    header('Location: verify.php');
    exit;
}

// If not POST, show the signup form
include 'Forms/forms.php';
$form = new forms();
$form->signup();