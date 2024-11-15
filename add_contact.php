<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $db = connectDB();
    $stmt = $db->prepare('INSERT INTO contacts_db (fullName, email, phone) VALUES (?, ?, ?)');
    $stmt->execute([$fullName, $email, $phone]);

    header('Location: index.php');
}
?>
