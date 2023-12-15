<?php
include_once 'classes/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = password_hash($Password, PASSWORD_DEFAULT)
    
    // Create a new user
    $user = new User($username,$email,$password);
    
    // Redirect to the homepage or perform additional actions
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Register</button>
    </form>
</body>
</html>
