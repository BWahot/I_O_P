<?php


session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entered_code = $_POST['verification_code'];
    $actual_code = $_SESSION['verification_code'] ?? null;

    if ($entered_code == $actual_code) {
        // Mark user as verified in your database here (not shown)
        unset($_SESSION['verification_code']);
        unset($_SESSION['user_email']);
        header('Location: signin.php'); // Redirect to login page
        exit;
    } else {
        echo "Incorrect verification code. Please try again.";
    }
}
?>

<form method="post" action="">
    <label for="verification_code">Enter Verification Code:</label>
    <input type="text" id="verification_code" name="verification_code" required>
    <br><br>
    <input type="submit" value="Verify">
</form>