<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/contact_ico.png">
</head>
<body>
    <h1>Ajouter un contact</h1>
    <form action="add_contact.php" method="POST">
        <input type="text" name="fullName" placeholder="Nom" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Téléphone" required>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
