<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $db = connectDB();
    $stmt = $db->prepare('DELETE FROM contacts_db WHERE id = ?');
    $stmt->execute([$id]);

    header('Location: index.php');
}
?>
