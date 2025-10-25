<?php
$host = "localhost";
$db = "taekwondo_kulubu";
$user = "root";
$pass = "";

try {
    $baglanti = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
?>
