<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $db = connectDB();
    $stmt = $db->prepare('UPDATE contacts_db SET fullName = ?, email = ?, phone = ? WHERE id = ?');
    $stmt->execute([$fullName, $email, $phone, $id]);

    header('Location: index.php');
}
?>
