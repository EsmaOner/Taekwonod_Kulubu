<?php
$egitmenler = [
    ["ad" => "Fikret Temoçin", "ozellik" => "Baş antrenör", "resim" => "final/fotolar/fikret_hoca.png"],
    ["ad" => "Hakan Reçber", "ozellik" => "Kondisyon eğitmeni", "resim" => "final/fotolar/hakan_recber.png"],
    ["ad" => "Hatice Kübra İlgün", "ozellik" => "Sparring eğitmeni", "resim" => "final/fotolar/hatice_abla.png"],
];
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Eğitmenler</title>
    <style>
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right,rgb(92, 93, 94),rgb(41, 42, 43));
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .page-title {
            text-align: center;
            font-size: 36px;
            margin-bottom: 40px;
            color:rgb(0, 0, 0);
            border-bottom: 3px solid #3498db;
            display: inline-block;
            padding-bottom: 10px;
        }

        .egitmenler-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .egitmen-card {
            background-color:rgb(255, 255, 255);
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .egitmen-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        .egitmen-resim {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .egitmen-detaylar {
            padding: 20px;
            text-align: center;
        }

        .egitmen-ad {
            font-size: 22px;
            color:rgb(0, 0, 0);
            margin: 10px 0 5px;
        }

        .egitmen-ozellik {
            font-size: 16px;
            color: #7f8c8d;
        }

        @media (max-width: 600px) {
            .page-title {
                font-size: 28px;
            }

            .egitmen-resim {
                height: 180px;
            }
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
            <a href="index.php" style="color: white; text-decoration: none;">Eğitmenler</a>
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



    <div class="container">
        <h1 class="page-title">Taekwondo Eğitmenlerimiz</h1>

        <div class="egitmenler-list">
            <?php foreach ($egitmenler as $egitmen): ?>
                <div class="egitmen-card">
                    <img src="final/fotolar/<?= $egitmen['resim'] ?>" alt="<?= $egitmen['ad'] ?>" class="egitmen-resim">
                    <div class="egitmen-detaylar">
                        <h3 class="egitmen-ad"><?= $egitmen['ad'] ?></h3>
                        <p class="egitmen-ozellik"><?= $egitmen['ozellik'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
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
