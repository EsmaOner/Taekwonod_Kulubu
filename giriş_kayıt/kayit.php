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
        * {
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            color: white;
            background: linear-gradient(to right, #141e30, #243b55);
            display: flex;
            flex-direction: column;
        }

        .container {
            width: 380px;
            margin: auto; /* dikey ve yatay ortalama */
            padding: 30px;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            text-align: center; /* tüm içerik ortalı */
        }

        h2 {
            margin-bottom: 20px;
            color: #fff;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            width: 85%;
            padding: 12px;
            margin: 8px 0;
            border: none;
            border-radius: 6px;
            font-size: 14px;
        }

        input[type="text"], input[type="password"], input[type="email"] {
            background: #fff;
            color: #000;
        }

        button {
            width: 85%;
            padding: 12px;
            background-color: #27ae60;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            margin-top: 15px;
            cursor: pointer;
            font-size: 15px;
        }

        button:hover {
            background-color: #219150;
        }

        .link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #a9dcff;
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
        }

        .message {
            text-align: center;
            margin-top: 15px;
            color: #ff4b4b;
        }

        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px 0;
            text-align: center;
            font-size: 16px;
            margin-top: auto; /* footer'ı en alta iter */
        }

        footer div {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
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

<footer>
    <div>
        <p>&copy; <?= date('Y') ?> Taekwondo Kulübü. Tüm hakları saklıdır.</p>
    </div>
</footer>

</body>
</html>
