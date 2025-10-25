<?php
// Veritabanı bağlantısı
$conn = new mysqli("localhost", "root", "", "taekwondo_kulubu");
if ($conn->connect_error) die("Bağlantı hatası: " . $conn->connect_error);

// Tüm ders programını çeker
$sql = "SELECT * FROM ders_programi ORDER BY FIELD(gun,'Pazartesi','Salı','Çarşamba','Perşembe','Cuma'), saat";
$result = $conn->query($sql);

$gunler = ["Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma"];
$saatler = [];
$program = [];

// Veriyi diziye dönüştürür
while($row = $result->fetch_assoc()) {
    $program[$row['gun']][$row['saat']] = $row['ders_adi'];
    if (!in_array($row['saat'], $saatler)) $saatler[] = $row['saat'];
}
sort($saatler);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Taekwondo Ders Programı</title>
    <style>
         body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right,rgb(4, 0, 130),rgb(0, 0, 0));
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color:rgb(255, 255, 255);
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 30px;
            background: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #2e86de;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f8f8f8;
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
            <a href="index.php" style="color: white; text-decoration: none;">Ders Programı</a>
        </div>
        
        <!-- Menü ve Çıkış butonunu ayıran yeni yapı -->
        <div style="display: flex; align-items: center; gap: 15px; margin-top: 10px; margin-left: auto;">
            <nav style="display: flex; gap: 15px;">
                <a href="../ana_sayfa.php" style="color: white; text-decoration: none;">Ana Sayfa</a>
                <a href="hakkinda.php" style="color: white; text-decoration: none;">Hakkında</a>
                <a href="egitmenler.php" style="color: white; text-decoration: none;">Eğitmenler</a>
                <a href="../etkinlikler.php" style="color: white; text-decoration: none;">Etkinlikler</a>
                <a href="ders_programi.php" style="color: white; text-decoration: none;">Ders Programı</a>
                <a href="iletisim.php" style="color: white; text-decoration: none;">İletişim</a>
            </nav>

            <!-- Koyu kırmızı çıkış butonu -->
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


<h1>Haftalık Taekwondo Ders Programı</h1>

<table>
    <tr>
        <th>Saat / Gün</th>
        <?php foreach ($gunler as $gun): ?>
            <th><?= $gun ?></th>
        <?php endforeach; ?>
    </tr>
    <?php foreach ($saatler as $saat): ?>
        <tr>
            <td><strong><?= $saat ?></strong></td>
            <?php foreach ($gunler as $gun): ?>
                <td><?= $program[$gun][$saat] ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
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
