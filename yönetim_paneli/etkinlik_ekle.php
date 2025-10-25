<?php
// Veritabanı bağlantısı
$conn = new mysqli("localhost", "root", "", "taekwondo_kulubu");
if ($conn->connect_error) die("Bağlantı hatası: " . $conn->connect_error);

$mesaj = "";

// Etkinlik ekleme işlemi
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $baslik = $_POST["baslik"];
    $aciklama = $_POST["aciklama"];
    $tarih = $_POST["tarih"];
    $yer = $_POST["yer"];

    if (!empty($baslik) && !empty($aciklama) && !empty($tarih) && !empty($yer)) {
        $stmt = $conn->prepare("INSERT INTO etkinlikler (baslik, aciklama, tarih, yer) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $baslik, $aciklama, $tarih, $yer);
        $stmt->execute();
        $stmt->close();
        $mesaj = "<p style='color:green;'>✅ Etkinlik başarıyla eklendi.</p>";
    } else {
        $mesaj = "<p style='color:red;'>❌ Lütfen tüm alanları doldurun.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Etkinlik Ekle</title>
    <style>
        body {
            background: white;
            color: black;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        .form-container {
            margin: auto;
            width: 60%;
        }
        input, textarea, button {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 12px;
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
    <h1>Etkinlik Ekle</h1>
    <div class="form-container">
        <form method="post">
            <input type="text" name="baslik" placeholder="Etkinlik Başlığı">
            <textarea name="aciklama" placeholder="Etkinlik Açıklaması"></textarea>
            <input type="date" name="tarih" required>
             <input type="text" name="yer" placeholder="Etkinlik Yeri" required>
             <label>Etkinlik Detayları:</label><br>
             <textarea name="detay_metni" rows="5" cols="50"></textarea><br><br>
            <button class="btn">Etkinlik Ekle</button>
        </form>
    </div>
</body>
</html>