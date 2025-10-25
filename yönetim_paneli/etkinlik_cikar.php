<?php
// Veritabanı bağlantısı
$conn = new mysqli("localhost", "root", "", "taekwondo_kulubu");
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$mesaj = "";

// Etkinlik silme işlemi
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Güvenlik için POST verilerini temizle
    $baslik = trim($_POST["baslik"]);
    $aciklama = trim($_POST["aciklama"]);
    $tarih = $_POST["tarih"];
    $yer = trim($_POST["yer"]);

    if (!empty($baslik) && !empty($aciklama) && !empty($tarih) && !empty($yer)) {
        // Silme sorgusu (eşleşen tüm bilgilerle)
        $stmt = $conn->prepare("DELETE FROM etkinlikler WHERE baslik = ? AND aciklama = ? AND tarih = ? AND yer = ?");
        $stmt->bind_param("ssss", $baslik, $aciklama, $tarih, $yer);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $mesaj = "<p style='color:green;'>✅ Etkinlik başarıyla silindi.</p>";
        } else {
            $mesaj = "<p style='color:red;'>❌ Belirtilen bilgilerle eşleşen etkinlik bulunamadı.</p>";
        }

        $stmt->close();
    } else {
        $mesaj = "<p style='color:red;'>❌ Lütfen tüm alanları doldurun.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Etkinlik Çıkar</title>
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
            box-sizing: border-box;
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
        .mesaj {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Etkinlik Sil</h1>
    <div class="form-container">
        <form method="post" action="">
            <input type="text" name="baslik" placeholder="Etkinlik Başlığı" required>
            <textarea name="aciklama" placeholder="Etkinlik Açıklaması" required></textarea>
            <input type="date" name="tarih" required>
            <input type="text" name="yer" placeholder="Etkinlik Yeri" required>
            <button type="submit" class="btn">Etkinliği Sil</button>
        </form>
        <div class="mesaj"><?php echo $mesaj; ?></div>
    </div>
</body>
</html>
