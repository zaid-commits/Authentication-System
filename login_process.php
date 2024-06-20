<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform user authentication here (validate username and password)
    // Assuming authentication is successful, set the user_id session variable
    $_SESSION['user_id'] = 1; // Replace 1 with the actual user ID

    header("Location: dashboard.php");
    exit;
}
?>
