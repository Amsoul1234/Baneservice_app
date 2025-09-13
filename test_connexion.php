<?php
// test_connexion.php

$host = 'localhost';
$dbname = 'baneservice';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connexion réussie à la base de données MySQL !";
} catch (PDOException $e) {
    echo "❌ Échec de la connexion : " . $e->getMessage();
}
?>
