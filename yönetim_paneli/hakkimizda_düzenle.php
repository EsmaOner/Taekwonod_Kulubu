<?php
$host = 'localhost';
$db   = 'taekwondo_kulubu';
$user = 'root';        // doğru kullanıcı adı
$pass = '';            // doğru şifre (çoğunlukla XAMPP'de boş)
$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_error) {
    die("Bağlantı hatası: " . $mysqli->connect_error);
}

// Güncelleme form gönderildiyse
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $telefon = $mysqli->real_escape_string($_POST['telefon']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $adres = $mysqli->real_escape_string($_POST['adres']);

    // Eğer tablodan kayıt yoksa insert, varsa update yapalım
    $result = $mysqli->query("SELECT * FROM iletisim_bilgileri WHERE id=1");
    if ($result->num_rows > 0) {
        $mysqli->query("UPDATE iletisim_bilgileri SET telefon='$telefon', email='$email', adres='$adres' WHERE id=1");
    } else {
        $mysqli->query("INSERT INTO iletisim_bilgileri (id, telefon, email, adres) VALUES (1, '$telefon', '$email', '$adres')");
    }

    $mesaj = "İletişim bilgileri başarıyla güncellendi.";
}

// Mevcut iletişim bilgilerini çek
$result = $mysqli->query("SELECT * FROM iletisim_bilgileri WHERE id=1");
$iletisim = $result->fetch_assoc() ?? ['telefon'=>'', 'email'=>'', 'adres'=>''];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim Bilgilerini Düzenle</title>
    <style>
        body {
            background: white;
            color: black;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        form {
            width: 60%;
            margin: auto;
        }
        input, textarea, button {
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
        .mesaj {
            margin: 15px 0;
            color: green;
        }
    </style>
</head>
<body>
    <h1>İletişim Bilgilerini Düzenle</h1>
    <?php if (!empty($mesaj)): ?>
        <div class="mesaj"><?= $mesaj ?></div>
    <?php endif; ?>
    <form method="post">
        <input type="text" name="telefon" placeholder="Telefon" value="<?= htmlspecialchars($iletisim['telefon']) ?>" required>
        <input type="email" name="email" placeholder="E-Posta" value="<?= htmlspecialchars($iletisim['email']) ?>" required>
        <textarea name="adres" placeholder="Adres" required><?= htmlspecialchars($iletisim['adres']) ?></textarea>
        <button class="btn" type="submit">Güncelle</button>
    </form>
</body>
</html>
