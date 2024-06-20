<?php
session_start();
require_once 'config.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_FILES['file']['name'];
    $filedata = file_get_contents($_FILES['file']['tmp_name']);

    $stmt = $pdo->prepare("INSERT INTO files (filename, filedata) VALUES (?, ?)");
    $stmt->bindParam(1, $filename);
    $stmt->bindParam(2, $filedata, PDO::PARAM_LOB);
    $stmt->execute();

    echo "File uploaded successfully.";
}
?>
