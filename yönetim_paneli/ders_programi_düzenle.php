<?php
// Veritabanı bağlantısı
$conn = new mysqli("localhost", "root", "", "taekwondo_kulubu");
if ($conn->connect_error) die("Bağlantı hatası: " . $conn->connect_error);

$mesaj = "";

// Ders ekleme işlemi
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $gun = $_POST["gun"];
    $saat = $_POST["saat"];
    $ders = $_POST["ders"];

    if (!empty($gun) && !empty($saat) && !empty($ders)) {
        $stmt = $conn->prepare("INSERT INTO ders_programi (gun, saat, ders_adi) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $gun, $saat, $ders);
        $stmt->execute();
        $stmt->close();
        $mesaj = "<p style='color:green;'>✅ Ders başarıyla eklendi.</p>";
    } else {
        $mesaj = "<p style='color:red;'>❌ Lütfen tüm alanları doldurun.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ders Ekle</title>
    <style>
        body {
            background: black;
            color: black;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        input, button {
            padding: 10px;
            margin: 10px;
            width: 300px;
            max-width: 90%;
            font-size: 16px;
        }
        button {
            background:rgb(13, 83, 130);
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background:red;
        }
        .mesaj {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Ders Ekle</h1>

    <form method="post" action="">
        <input type="text" name="gun" placeholder="Gün (örnek: Pazartesi)" required>
        <input type="text" name="saat" placeholder="Saat (örnek: 09:00-10:00)" required>
        <input type="text" name="ders" placeholder="Ders Adı" required>
        <br>
        <button type="submit">Ekle</button>
    </form>

    <div class="mesaj">
        <?php if ($mesaj) echo $mesaj; ?>
    </div>
</body>
</html>
