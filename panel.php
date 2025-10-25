<?php
session_start();

if (!isset($_SESSION['giris']) || $_SESSION['giris'] !== true) {
    header("Location: yonetici_giris.php");
    exit();
}

// Önbelleğe alınmasını engelle
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 1 Jan 2000 00:00:00 GMT");
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yönetici Paneli</title>
    <style>
        body {
            background-color: #000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            width: 250px;
            background-color: #fff;
            position: fixed;
            right: 0;
            top: 0;
            height: 100%;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }

        .sidebar h1 {
            font-size: 22px;
            margin-bottom: 30px;
            color: #333;
            text-align: center;
        }

        .button {
            background-color: #3498db;
            color: #fff;
            padding: 14px;
            margin: 8px 0;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .button:hover {
            background-color: #e74c3c;
            transform: scale(1.03);
        }

        .content {
            margin-right: 270px;
            padding: 100px 40px;
            text-align: center;
            color: #ffffff;
        }

        .content h2 {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .content p {
            font-size: 18px;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h1>Yönetici Paneli</h1>
        <a href="yönetim_paneli/ana_sayfa_düzenle.php" class="button">Ana Sayfa Düzenle</a>
        <a href="yönetim_paneli/hakkimizda_düzenle.php" class="button">Hakkımızda Düzenle</a>
        <a href="yönetim_paneli/iletisim_düzenle.php" class="button">İletişim Düzenle</a>
        <a href="yönetim_paneli/egitmenler_düzenle.php" class="button">Eğitmenleri Düzenle</a>
        <a href="yönetim_paneli/ders_programi_düzenle.php" class="button">Ders Programı Düzenle</a>
        <a href="yönetim_paneli/etkinlik_ekle.php" class="button">Etkinlik Ekle</a>
        <a href="yönetim_paneli/etkinlik_cikar.php" class="button">Etkinlik Çıkar</a>
        <a href="mesajlar.php" class="button">Mesajlar</a>
        <a href="yonetici_cikis.php" class="button">Çıkış Yap</a>

    </div>

    <div class="content">
        <h2>Hoş geldiniz, <?php echo htmlspecialchars($_SESSION['kullanici_adi']); ?>!</h2>
        <p>Sağdaki menüyü kullanarak site içeriklerini yönetebilirsiniz.</p>
    </div>

</body>
</html>
