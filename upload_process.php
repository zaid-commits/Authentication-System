<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare("INSERT INTO user_content (user_id, content) VALUES (?, ?)");
    $stmt->execute([$user_id, $content]);

    header("Location: dashboard.php");
    exit;
}
?>
