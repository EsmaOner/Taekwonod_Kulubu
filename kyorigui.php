<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kyorugi Nedir?</title>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: linear-gradient(to right,rgb(48, 103, 108), #e2ebf0);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.27);
        }

        h1 {
            color: #528b8b;
            text-align: center;
            margin-bottom: 30px;
        }

        p {
            line-height: 1.8;
            color: #333;
            font-size: 17px;
        }

        .highlight {
            background-color: #79cdcd;
            padding: 10px;
            border-left: 4px solid #8deeee;
            margin: 20px 0;
            font-style: italic;
        }

        ul {
            padding-left: 20px;
            line-height: 1.6;
        }

        li {
            margin-bottom: 8px;
        }

        .video-container {
            text-align: center;
            margin-top: 30px;
        }

        iframe {
            border-radius: 10px;
            max-width: 100%;
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
            <a href="ana_sayfa.php" style="color: white; text-decoration: none;">Kyorugi</a>
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
    <h1>Taekwondo'da Kyorugi (Müsabaka)</h1>
    <p>
        <strong>Kyorugi</strong>, Taekwondo'da <em>serbest dövüş</em> ya da <em>müsabaka</em> anlamına gelir. Dünya Taekwondo Federasyonu (WT) tarafından düzenlenen kurallarla belirlenmiş, puan sistemiyle uygulanan bir karşılaşma biçimidir.
    </p>

    <div class="highlight">
        Kyorugi, hız, teknik, dayanıklılık ve stratejinin birleştiği profesyonel bir müsabaka disiplinidir.
    </div>

    <p>
        Kyorugi, Taekwondo’nun spor yönünün en çok öne çıktığı alanlardan biridir. Sporcular, koruyucu ekipmanlarla belirli puan bölgelerine teknikler uygulayarak puan kazanmaya çalışır.
    </p>

    <h3>Kyorugi Kuralları:</h3>
    <ul>
        <li>Maçlar 3 raund üzerinden yapılır (genellikle 2 dakikalık)</li>
        <li>Göğüs ve başa yapılan teknikler puan kazandırır</li>
        <li>Elektronik koruyucular kullanılır (WT sisteminde)</li>
        <li>Fauller ve sportmenlik dışı hareketler puan kaybettirir</li>
    </ul>

    <h3>Gereken Özellikler:</h3>
    <ul>
        <li>Hızlı refleks</li>
        <li>Doğru zamanlama</li>
        <li>Taktiksel düşünme</li>
        <li>Psikolojik dayanıklılık</li>
    </ul>

    <div class="video-container">
        <h3>Kyorugi Müsabaka Örneği</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/0jSrzgY7U98" title="Kyorugi Maçı" frameborder="0" allowfullscreen></iframe>
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
