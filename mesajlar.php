<?php
// Veritabanı bağlantısı
$host = "localhost";
$db = "taekwondo_kulubu";         // veritabanı adını kendi verinle değiştir
$user = "root";        // phpMyAdmin kullanıcı adı
$pass = "";            // genellikle XAMPP için boş bırakılır

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_error) {
    die("Bağlantı hatası: " . $mysqli->connect_error);
}

// Mesajları çek
$result = $mysqli->query("SELECT * FROM mesajlar ORDER BY tarih DESC");
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Gelen Mesajlar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 40px;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        table {
            width: 90%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 16px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Gelen Mesajlar</h1>
    <table>
        <tr>
            <th>Ad Soyad</th>
            <th>E-posta</th>
            <th>Konu</th>
            <th>Mesaj</th>
            <th>Tarih</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['isim']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['konu']) ?></td>
            <td><?= nl2br(htmlspecialchars($row['mesaj'])) ?></td>
            <td><?= $row['tarih'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
