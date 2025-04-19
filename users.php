<?php
// Name: Ariana Hrlic, Fiona Ang, Smriti Kohli
// Author: Fiona Ang
// Section: CST 8285 300_301
// File: users.php
// Date: April 8, 2025
// Description: This is a php file for Assignment2 (Store user data)

session_start();

// Connection info
$servername = "localhost";
$database = "display_pet";
$username = "root";
$password = "";

// Connect to server
$connection = mysqli_connect($servername, $username, $password, $database);

if(mysqli_connect_errno()){
    $msg = "Database connection failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
}

// Handle both signup and login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Determine if it's login or signup based on form fields
    if (isset($_POST['usernameAndEmail'])) {
        handleLogin($connection);
    } elseif (isset($_POST['firstname'])) {
        handleSignup($connection);
    } else {
        $_SESSION['error'] = 'Invalid request';
        header('Location: ' . $_SERVER['HTTP_REFERER']); // Go back to form page
        exit();
    }
}

// Close connection
mysqli_close($connection);

// Function to handle user login
function handleLogin($connection) {
    $usernameOrEmail = mysqli_real_escape_string($connection, $_POST['usernameAndEmail']);
    $password = $_POST['pass']; // Don't escape password - we'll hash it
    
    // Check if user exists by username or email
    $sql = "SELECT * FROM users WHERE username = '$usernameOrEmail' OR email = '$usernameOrEmail'";
    $result = mysqli_query($connection, $sql);
    
    if (!$result || mysqli_num_rows($result) === 0) {
        $_SESSION['error'] = 'Invalid username/email or password';
        header('Location: login.php'); // Stay on login page
        exit();
    }
    
    $user = mysqli_fetch_assoc($result);
    
    // Verify password
    if (password_verify($password, $user['password'])) {
        // Start session and redirect
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        
        // Redirect to home.php
        header('Location: Home.php');
        exit();
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid username/email or password']);
    }
}

// Function to handle user signup
function handleSignup($connection) {
    // Escape all user inputs
    $firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone-number']);
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $newsletter = isset($_POST['newsletter']) ? 1 : 0;
    
    // Check if username or email already exists
    $checkSql = "SELECT id FROM users WHERE username = '$username' OR email = '$email'";
    $checkResult = mysqli_query($connection, $checkSql);
    
    if (mysqli_num_rows($checkResult) > 0) {
        $_SESSION['error'] = 'Username or email already exists';
        header('Location: signup.php');
        exit();
    }
    
    // Insert new user
    $insertSql = "INSERT INTO users (first_name, last_name, username, email, phone_number, password, newsletter) 
                 VALUES ('$firstname', '$lastname', '$username', '$email', '$phone', '$password', $newsletter)";
    
    if (mysqli_query($connection, $insertSql)) {
        // Get the new user's ID
        $userId = mysqli_insert_id($connection);
        
        // Start session and redirect
        session_start();
        $_SESSION['user_id'] = $userId;
        $_SESSION['username'] = $username;
        
        // Redirect to home.php
        header('Location: Home.php');
        exit();
    } else {
        echo json_encode(['success' => false, 'message' => 'Registration failed: ' . mysqli_error($connection)]);
    }
}
?>