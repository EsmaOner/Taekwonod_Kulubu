<?php
include '../config/db.php';
$mesaj = '';

if ($_POST) {
    $kadi = $_POST['kullanici_adi'];
    $sifre = password_hash($_POST['sifre'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $kontrol = $baglanti->prepare("SELECT * FROM kullanicilar WHERE kullanici_adi = ?");
    $kontrol->execute([$kadi]);

    if ($kontrol->rowCount() > 0) {
        $mesaj = "Bu kullanıcı adı zaten alınmış.";
    } else {
        $ekle = $baglanti->prepare("INSERT INTO kullanicilar (kullanici_adi, sifre, email) VALUES (?, ?, ?)");
        $ekle->execute([$kadi, $sifre, $email]);
        $mesaj = "Kayıt başarılı. <a href='giris.php'>Giriş yap</a>";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Ol</title>
    <style>
        body {
            background: linear-gradient(to right, #141e30, #243b55);
            font-family: 'Segoe UI', sans-serif;
            color: white;
        }
        .container {
            width: 380px;
            margin: 60px auto;
            padding: 30px;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: none;
            border-radius: 6px;
            font-size: 14px;
        }
        input[type="text"], input[type="password"] {
            background: #fff;
            color: #000;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #27ae60;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            margin-top: 15px;
            cursor: pointer;
        }
        button:hover {
            background-color: #219150;
        }
        .link {
            display: block;
            text-align: center;
            margin-top: 12px;
            color: #a9dcff;
            text-decoration: none;
        }
        .message {
            text-align: center;
            margin-top: 15px;
            color: #ff4b4b;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Kayıt Ol</h2>
    <form method="post">
        <input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı" required>
        <input type="email" name="email" placeholder="E-posta" required>
        <input type="password" name="sifre" placeholder="Şifre" required>
        <button type="submit">Kayıt Ol</button>
    </form>
    <a class="link" href="giris.php">Zaten hesabın var mı? Giriş yap</a>
    <?php if ($mesaj) echo "<p class='message'>$mesaj</p>"; ?>
</div>
<footer style="
    background-color: #2c3e50;
    color: #ecf0f1;
    padding: 30px 0;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 16px;
    position: relative;
    bottom: 0;
    width: 100%;
">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <p style="margin: 0;">&copy; <?= date('Y') ?> Taekwondo Kulübü. Tüm hakları saklıdır.</p>
    </div>
</footer>

</body>
</html>
