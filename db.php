<?php
function connectDB() {
    $dsn = 'mysql:host=localhost;dbname=contacts_db;charset=utf8mb4';
    $username = 'root';
    $password = '';

    try {
        return new PDO($dsn, $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    } catch (PDOException $e) {
        die('Erreur de connexion : ' . $e->getMessage());
    }
}
?>
