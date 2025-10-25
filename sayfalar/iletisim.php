<?php
$mysqli = new mysqli("localhost", "root", "", "taekwondo_kulubu");

if ($mysqli->connect_error) {
    die("Bağlantı hatası: " . $mysqli->connect_error);
} 

// Veriyi çek
$result = $mysqli->query("SELECT * FROM iletisim_bilgileri WHERE id=1");
$iletisim = $result->fetch_assoc() ?? ['telefon'=>'', 'email'=>'', 'adres'=>''];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim</title>
    <style>
      <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right,rgb(255, 255, 255),rgb(253, 253, 253));
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 60px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
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
            background-color:rgb(0, 0, 0);
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
    </style>
</head>
<body>

   <header style="
    background-color:rgb(0, 0, 0);
    color: white;
    padding: 20px 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
">
    <div style="
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    ">
        <div style="font-size: 24px; font-weight: bold;">
            <a href="index.php" style="color: white; text-decoration: none;">İletişim</a>
        </div>

        <div style="display: flex; align-items: center; gap: 15px; margin-top: 10px; margin-left: auto;">
            <nav style="display: flex; gap: 15px;">
                <a href="../ana_sayfa.php" style="color: white; text-decoration: none;">Ana Sayfa</a>
                <a href="hakkinda.php" style="color: white; text-decoration: none;">Hakkında</a>
                <a href="egitmenler.php" style="color: white; text-decoration: none;">Eğitmenler</a>
                <a href="../etkinlikler.php" style="color: white; text-decoration: none;">Etkinlikler</a>
                <a href="ders_programi.php" style="color: white; text-decoration: none;">Ders Programı</a>
                <a href="iletisim.php" style="color: white; text-decoration: none;">İletişim</a>
            </nav>

            <!-- Çıkış butonu -->
            <a href="../oturum_kapama.php" style="
                background-color: #8B0000;
                color: white;
                padding: 8px 14px;
                border-radius: 6px;
                text-decoration: none;
                font-weight: bold;
                transition: background-color 0.3s ease;
            " onmouseover="this.style.backgroundColor='#660000'" onmouseout="this.style.backgroundColor='#8B0000'">Çıkış</a>
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
            <p><strong>Adres:</strong><?= htmlspecialchars($iletisim['adres']) ?></p>
            <p><strong>Telefon:</strong> <?= htmlspecialchars($iletisim['telefon']) ?></p>
            <p><strong>E-posta:</strong><?= htmlspecialchars($iletisim['email']) ?></p>
        </div>
    </div>
  <footer style="
    background-color:rgb(0, 0, 0);
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
        <p style="margin: 0; color: #ecf0f1;">&copy; <?= date('Y') ?> Taekwondo Kulübü. Tüm hakları saklıdır.</p>
        <div style="margin-top: 10px;">
            <a href="sayfalar/hakkinda.php" style="color: #ecf0f1; margin: 0 10px; text-decoration: none;">Hakkımızda</a>
            <a href="sayfalar/iletisim.php" style="color: #ecf0f1; margin: 0 10px; text-decoration: none;">İletişim</a>
            <a href="giriş_kayıt/giris.php" style="color: #ecf0f1; margin: 0 10px; text-decoration: none;">Çıkış</a>
        </div>
    </div>
</footer>

</body>
</html>
