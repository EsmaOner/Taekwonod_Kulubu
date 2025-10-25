<?php
session_start();

// Veritabanı bağlantısı
$baglanti = new mysqli("localhost", "root", "", "taekwondo_kulubu");
if ($baglanti->connect_error) {
    die("Veritabanı bağlantı hatası: " . $baglanti->connect_error);
}

// Giriş işlemi  --  "admin, 1234"
$hata = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $kullanici_adi = trim($_POST["kullanici_adi"]);
    $sifre = trim($_POST["sifre"]);

    $stmt = $baglanti->prepare("SELECT sifre FROM yonetici WHERE kullanici_adi = ?");
    $stmt->bind_param("s", $kullanici_adi);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($veritabani_sifre);
        $stmt->fetch();

        if (password_verify($sifre, $veritabani_sifre)) {
            $_SESSION["giris"] = true;
            $_SESSION["kullanici_adi"] = $kullanici_adi;
            header("Location: panel.php");
            exit();
        } else {
            $hata = "⚠ Şifre yanlış.";
        }
    } else {
        $hata = "⚠ Kullanıcı bulunamadı.";
    }

    $stmt->close();
}
$baglanti->close();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yönetici Girişi</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-box {
            background-color: #1c1c1c;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 25px;
            color: #3498db;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 6px;
            background-color: #333;
            color: #fff;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e74c3c;
        }

        .hata {
            margin-top: 15px;
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Yönetici Girişi</h2>
        <form method="POST">
            <input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı" required>
            <input type="password" name="sifre" placeholder="Şifre" required>
            <button type="submit">Giriş Yap</button>
        </form>
        <?php if (!empty($hata)) echo "<div class='hata'>$hata</div>"; ?>
    </div>
</body>
</html>

