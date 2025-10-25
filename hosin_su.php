<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hosin Sul Nedir?</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom right,rgb(47, 89, 70), #f1f8e9);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #00695c;
            margin-bottom: 30px;
        }

        p {
            font-size: 17px;
            line-height: 1.7;
            color: #333;
        }

        .bilgi-kutusu {
            background-color: #e0f2f1;
            padding: 15px 20px;
            border-left: 6px solid #00796b;
            margin: 25px 0;
            border-radius: 6px;
        }

        h3 {
            color: #00796b;
            margin-top: 40px;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        .video-container {
            text-align: center;
            margin-top: 30px;
        }

        iframe {
            max-width: 100%;
            border-radius: 10px;
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
            <a href="ana_sayfa.php" style="color: white; text-decoration: none;">Hosin Su</a>
        </div>
        <nav style="margin-top: 10px;">
            <a href="./ana_sayfa.php" style="color: white; text-decoration: none; margin: 0 15px;">Ana Sayfa</a>
            <a href="sayfalar/hakkinda.php" style="color: white; text-decoration: none; margin: 0 15px;">Hakkında</a>
            <a href="sayfalar/egitmenler.php" style="color: white; text-decoration: none; margin: 0 15px;">Eğitmenler</a>
            <a href="etkinlikler.php" style="color: white; text-decoration: none; margin: 0 15px;">Etkinlikler</a>
            <a href="sayfalar/ders_programi.php" style="color: white; text-decoration: none; margin: 0 15px;">Ders Programı</a>
            <a href="sayfalar/iletisim.php" style="color: white; text-decoration: none; margin: 0 15px;">İletişim</a>
            <a href="../oturum_kapama.php" style="
                background-color: #8B0000;
                color: white;
                padding: 8px 14px;
                border-radius: 6px;
                text-decoration: none;
                font-weight: bold;
                transition: background-color 0.3s ease;
            " onmouseover="this.style.backgroundColor='#660000'" onmouseout="this.style.backgroundColor='#8B0000'">Çıkış</a>
        </nav>
    </div>
</header>
<div class="container">
    <h1>Taekwondo'da Hosin Sul Nedir?</h1>

    <p><strong>Hosin Sul</strong> ya da diğer adıyla <em>öz savunma teknikleri</em>, Taekwondo'nun en önemli uygulama alanlarından biridir. Kişinin kendisini saldırılara karşı savunmasını sağlayan teknikler bütünüdür.</p>

    <div class="bilgi-kutusu">
        Hosin Sul, yalnızca fiziksel değil aynı zamanda zihinsel bir farkındalık, hızlı düşünme ve çevreyi analiz edebilme becerisi de kazandırır.
    </div>

    <p>Bu teknikler arasında tutma, sarılma, boğma, bıçak veya sopa saldırılarına karşı savunma gibi durumlar yer alır. Genellikle eşli çalışmalarda öğretilir ve pratiğe dökülerek öğrenilir.</p>

    <h3>Hosin Sul Temel Teknikleri:</h3>
    <ul>
        <li>Kol veya bilekten kurtulma</li>
        <li>Arkadan sarılmaya karşı savunma</li>
        <li>Bıçaklı saldırılara karşı savunma</li>
        <li>Denge bozma ve rakibi etkisiz hale getirme</li>
        <li>Kol bükme ve kilitleme teknikleri</li>
        <li>Sopa, baston veya benzeri objelere karşı müdahale</li>
    </ul>

    <p>Hosin Sul’un amacı saldırganı etkisiz hale getirirken, mümkün olduğunca zarar vermeden durumu kontrol altına almaktır. Bu nedenle savunma teknikleri kadar kontrol, denge ve ölçülülük de öğretilir.</p>

    <div class="video-container">
        <h3>Örnek Hosin Sul Gösterisi</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/0gWzVPqKpIY" title="Hosin Sul Teknikleri" frameborder="0" allowfullscreen></iframe>
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
