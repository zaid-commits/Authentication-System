<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: dashboard.php");
    exit;
}

// Display welcome message
echo "Welcome, " . $_SESSION['username'] . "!";
