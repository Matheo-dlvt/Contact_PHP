<?php
require 'db.php';

function addContact($fullName, $email, $phone) {
    $db = connectDB();
    $stmt = $db->prepare('INSERT INTO contacts_db (fullName, email, phone) VALUES (?, ?, ?)');
    $stmt->execute([$fullName, $email, $phone]);
}

function getContact($id) {
    $db = connectDB();
    $stmt = $db->prepare('SELECT * FROM contacts_db WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function updateContact($id, $fullName, $email, $phone) {
    $db = connectDB();
    $stmt = $db->prepare('UPDATE contacts_db SET fullName = ?, email = ?, phone = ? WHERE id = ?');
    $stmt->execute([$fullName, $email, $phone, $id]);
}

function deleteContact($id) {
    $db = connectDB();
    $stmt = $db->prepare('DELETE FROM contacts_db WHERE id = ?');
    $stmt->execute([$id]);
}
?>
