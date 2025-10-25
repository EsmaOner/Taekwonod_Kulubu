
<?php
$host = 'localhost';
$kullanici = 'root';       
$sifre = '';               
$veritabani = 'taekwondo_kulubu'; 

$conn = new mysqli($host, $kullanici, $sifre, $veritabani);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Etkinlikler</title>
    <style>
       body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right,rgb(118, 199, 136),rgb(53, 150, 67),rgb(1, 67, 9));
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color:rgb(44, 80, 53);
            margin-bottom: 40px;
        }

        .etkinlik {
            border-left: 6px solid #1abc9c;
            padding: 20px;
            margin-bottom: 25px;
            background: #fdfdfd;
            border-radius: 6px;
            transition: 0.3s;
        }

        .etkinlik:hover {
            background: #e9f8f5;
            transform: scale(1.01);
        }

        .etkinlik h2 {
            margin-top: 0;
            color: #16a085;
        }

        .etkinlik p {
            margin: 5px 0;
            color: #333;
        }

        .etkinlik .tarih {
            font-weight: bold;
            color: #e67e22;
        }

        .etkinlik .yer {
            font-style: italic;
            color: #555;
        }
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
            <a href="ana_sayfa.php" style="color: white; text-decoration: none;">Etkinlikler</a>
        </div>

        <div style="display: flex; align-items: center; gap: 15px; margin-top: 10px; margin-left: auto;">
            <nav style="display: flex; gap: 15px;">
                <a href="./ana_sayfa.php" style="color: white; text-decoration: none;">Ana Sayfa</a>
                <a href="sayfalar/hakkinda.php" style="color: white; text-decoration: none;">Hakkında</a>
                <a href="sayfalar/egitmenler.php" style="color: white; text-decoration: none;">Eğitmenler</a>
                <a href="etkinlikler.php" style="color: white; text-decoration: none;">Etkinlikler</a>
                <a href="sayfalar/ders_programi.php" style="color: white; text-decoration: none;">Ders Programı</a>
                <a href="sayfalar/iletisim.php" style="color: white; text-decoration: none;">İletişim</a>             
            </nav>

            <!-- Çıkış butonu -->
            <a href="oturum_kapama.php" style="
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
    <h1>Taekwondo Etkinlikleri</h1>

    <?php
    $sql = "SELECT * FROM etkinlikler ORDER BY tarih ASC";
    $sonuc = $conn->query($sql);

    if ($sonuc->num_rows > 0) {
        while($row = $sonuc->fetch_assoc()) {
            echo '<div class="etkinlik">';
            echo '<h2>' . htmlspecialchars($row["baslik"]) . '</h2>';
            echo '<p class="tarih">Tarih: ' . date("d F Y", strtotime($row["tarih"])) . '</p>';
            echo '<p class="yer">Yer: ' . htmlspecialchars($row["yer"]) . '</p>';
            echo '<p>' . nl2br(htmlspecialchars($row["aciklama"])) . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>Henüz etkinlik eklenmemiş.</p>';
    }

    $conn->close();
    ?>
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
