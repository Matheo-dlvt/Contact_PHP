<?php
require 'db.php';

$id = $_GET['id'];
$db = connectDB();
$stmt = $db->prepare('SELECT * FROM contacts_db WHERE id = ?');
$stmt->execute([$id]);
$contact = $stmt->fetch();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier un contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/contact_ico.png">
</head>
<body>
    <h1>Modifier un contact</h1>
    <form action="edit_contact.php" method="POST">
        <input type="hidden" name="id" value="<?= $contact['id'] ?>">
        <input type="text" name="fullName" value="<?= $contact['fullName'] ?>" required>
        <input type="email" name="email" value="<?= $contact['email'] ?>" required>
        <input type="text" name="phone" value="<?= $contact['phone'] ?>" required>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
