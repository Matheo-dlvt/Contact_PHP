<?php
require 'db.php';

$db = connectDB();
$stmt = $db->query('SELECT * FROM contacts_db');
$contacts = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Liste des contacts</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/contact_ico.png">
</head>
<body>
    <h1>Liste des contacts</h1>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($contacts as $contact): ?>
        <tr>
            <td><?= htmlspecialchars($contact['fullName']) ?></td>
            <td><?= htmlspecialchars($contact['email']) ?></td>
            <td><?= htmlspecialchars($contact['phone']) ?></td>
            <td>
                <a href="edit_form.php?id=<?= $contact['id'] ?>">Modifier</a>
                <a href="delete_contact.php?id=<?= $contact['id'] ?>">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <div id="add-btn">
        <a href="add_form.php"><button>Ajouter un contact</button></a>
    </div>
</body>
</html>
