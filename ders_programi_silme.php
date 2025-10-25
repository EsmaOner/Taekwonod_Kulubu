<?php
// Veritabanı bağlantısı
$conn = new mysqli("localhost", "root", "", "taekwondo_kulubu");
if ($conn->connect_error) die("Bağlantı hatası: " . $conn->connect_error);

// Silme işlemi
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $gun = $_POST["gun"];
    $saat = $_POST["saat"];

    $stmt = $conn->prepare("DELETE FROM ders_programi WHERE gun = ? AND saat = ?");
    $stmt->bind_param("ss", $gun, $saat);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<p style='color:green;'>Ders başarıyla silindi.</p>";
    } else {
        echo "<p style='color:red;'>Belirtilen gün ve saate ait ders bulunamadı.</p>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ders Sil</title>
    <style>
        body {
            background: white;
            color: black;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        input, button {
            padding: 10px;
            margin: 10px;
        }
        .btn {
            background: #3498db;
            color: white;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background: red;
        }
    </style>
</head>
<body>
    <h1>Ders Programından Ders Sil</h1>
    <form method="post">
        <input type="text" name="gun" placeholder="Gün (örnek: Pazartesi)" required>
        <input type="text" name="saat" placeholder="Saat (örnek: 09:00-10:00)" required>
        <button type="submit" class="btn">Sil</button>
    </form>
</body>
</html>