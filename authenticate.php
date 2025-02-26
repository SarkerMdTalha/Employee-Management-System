<?php

$username = $_POST['username'];
$password = $_POST['password'];

// Validate username
if (empty($username)) {
    header('Location: index.html?error=Username is required.');
    exit;
}

// Validate password
if (empty($password)) {
    header('Location: index.html?error=Password is required.');
    exit;
}

// Check login credentials (replace with your actual validation logic)
if ($username !== 'admin' || $password !== 'cse370') {
    header('Location: index.html?error=Invalid username or password.');
    exit;
}

// Login successful
session_start();
$_SESSION['username'] = $username;
header('Location: index.php');
exit;
