<?php
// reset_password.php

// Database connection (update with your DB details)
$conn = include("connection.php");

// Check for form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $user_id = 1; // This should be dynamically set or retrieved (e.g., from session) based on your application logic.

    // Check if passwords match
    if ($password === $confirm_password) {
        // Hash the password before storing it
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // // Update the password in the database
        // $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
        // $stmt->bind_param("si", $hashed_password, $user_id);

        // if ($stmt->execute()) {
        //     // Redirect to login page after successful password reset
        //     header("Location: login.php");
        //     exit();
        // } else {
        //     echo "Error updating password. Please try again.";
        // }

        header("Location: login.php");
            exit();
            echo "Password changed successfully";                        
    } else {
        echo "Passwords do not match.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="forgot.css">
    <title>Reset Password</title>
</head>
<body>
    <!-- <h2>Reset Password</h2> -->
    <form action="" method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">New Password:</label>
        <input type="password" id="password" name="password" required><br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
