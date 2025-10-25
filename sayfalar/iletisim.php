<?php
$mysqli = new mysqli("localhost", "root", "", "taekwondo_kulubu");

if ($mysqli->connect_error) {
    die("Bağlantı hatası: " . $mysqli->connect_error);
} 

$result = $mysqli->query("SELECT * FROM iletisim_bilgileri WHERE id=1");
$iletisim = $result->fetch_assoc() ?? ['telefon'=>'', 'email'=>'', 'adres'=>''];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            background: linear-gradient(to right, #ffffff, #f7f7f7);
        }

        header {
            background-color: rgb(0, 0, 0);
            color: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            width: 100%;
        }

        header .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        header a {
            color: white;
            text-decoration: none;
        }

        header nav {
            display: flex;
            gap: 15px;
        }

        header .logout {
            background-color: #8B0000;
            color: white;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        header .logout:hover {
            background-color: #660000;
        }

        .container {
    width: 90%;           /* Ekran boyutuna göre esnek genişlik */
    max-width: 1000px;    /* Çok büyük ekranlarda sınır */
    margin: 100px auto;   /* Ortada ve yukarıdan boşluk */
    padding: 30px;
    background-color: #ffffff;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    flex-grow: 1;
}

        h1 {
            text-align: center;
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin: 10px 0 5px;
            color: #34495e;
        }

        input, textarea {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            resize: vertical;
        }

        textarea {
            min-height: 120px;
        }

        button {
            margin-top: 20px;
            padding: 12px;
            background-color: rgb(0, 0, 0);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2c80b4;
        }

        .info {
            margin-top: 40px;
            font-size: 16px;
            color: #555;
            text-align: center;
        }

        footer {
            background-color: rgb(0, 0, 0);
            color: #ecf0f1;
            padding: 25px 0;
            text-align: center;
            width: 100%;
            margin-top: auto;
        }

        footer a {
            color: #ecf0f1;
            margin: 0 10px;
            text-decoration: none;
        }

        @media (max-width: 600px) {
            .container {
                margin: 20px;
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }

            button {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="header-container">
        <div style="font-size: 24px; font-weight: bold;">
            <a href="index.php">İletişim</a>
        </div>

        <div style="display: flex; align-items: center; gap: 15px;">
            <nav>
                <a href="../ana_sayfa.php">Ana Sayfa</a>
                <a href="hakkinda.php">Hakkında</a>
                <a href="egitmenler.php">Eğitmenler</a>
                <a href="../etkinlikler.php">Etkinlikler</a>
                <a href="ders_programi.php">Ders Programı</a>
                <a href="iletisim.php">İletişim</a>
            </nav>

            <a href="../oturum_kapama.php" class="logout">Çıkış</a>
        </div>
    </div>
</header>

<div class="container">
    <h1>Bize Ulaşın</h1>
    <form action="mesaj_kaydet.php" method="post">
        <label for="isim">Ad Soyad</label>
        <input type="text" id="isim" name="isim" required>

        <label for="email">E-posta</label>
        <input type="email" id="email" name="email" required>

        <label for="konu">Konu</label>
        <input type="text" id="konu" name="konu" required>

        <label for="mesaj">Mesajınız</label>
        <textarea id="mesaj" name="mesaj" required></textarea>

        <button type="submit">Gönder</button>
    </form>

    <div class="info">
        <p><strong>Adres:</strong> <?= htmlspecialchars($iletisim['adres']) ?></p>
        <p><strong>Telefon:</strong> <?= htmlspecialchars($iletisim['telefon']) ?></p>
        <p><strong>E-posta:</strong> <?= htmlspecialchars($iletisim['email']) ?></p>
    </div>
</div>

<footer>
    <div>
        <p>&copy; <?= date('Y') ?> Taekwondo Kulübü. Tüm hakları saklıdır.</p>
        <div>
            <a href="sayfalar/hakkinda.php">Hakkımızda</a>
            <a href="sayfalar/iletisim.php">İletişim</a>
            <a href="giriş_kayıt/giris.php">Çıkış</a>
        </div>
    </div>
</footer>

</body>
</html>
