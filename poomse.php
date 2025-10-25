<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Poomse Nedir?</title>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: linear-gradient(to right,rgb(160, 99, 1),rgb(255, 255, 255));
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
        }

        p {
            line-height: 1.8;
            color: #333;
            font-size: 17px;
        }

        .highlight {
            background-color: #fef3c7;
            padding: 10px;
            border-left: 4px solid #f59e0b;
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
            <a href="ana_sayfa.php" style="color: white; text-decoration: none;">Poomse</a>
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
        <h1>Taekwondo'da Poomse Nedir?</h1>
        <p>
            <strong>Poomse</strong> ya da diğer adıyla <em>Poomsae</em>, Taekwondo'da belirli bir düzene göre yapılan teknik hareket dizileridir. Savunma, saldırı, duruş, denge, nefes ve estetik unsurların bir araya geldiği bir performanstır.
        </p>

        <div class="highlight">
            Poomse çalışmaları, öğrencinin teknik gelişimini ve kuşak sınavlarına hazırlanmasını sağlar.
        </div>

        <p>
            Her kuşak seviyesinde farklı Poomse'ler vardır ve zorluk dereceleri giderek artar. Poomse’ler hem zihinsel konsantrasyon hem de fiziksel koordinasyon açısından çok önemlidir.
        </p>

        <h3>Yaygın Kullanılan Poomse’ler:</h3>
        <ul>
            <li>Taegeuk 1 Jang - Başlangıç seviyesindeki öğrenciler için</li>
            <li>Taegeuk 2-8 Jang - Orta ve ileri düzey</li>
            <li>Koryo - Siyah kuşak 1. dan</li>
            <li>Keumgang - Siyah kuşak 2. dan</li>
            <li>Taebaek, Pyongwon, Sipjin, vb. - Daha ileri dan seviyeleri için</li>
        </ul>

        <p>
            Her Poomse, belirli bir felsefi temayı ve dövüş sanatları değerini temsil eder. Öğrenciler sadece hareketleri değil, aynı zamanda bu değerleri de öğrenmelidir.
        </p>

        <div class="video-container">
            <h3>Örnek Poomse Gösterimi</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/watch?v=WhkjRruCBTo&list=PLSFr5pEwo7gSwvfg4bjxoF3liyfJkCLAj" title="Taegeuk 1 Jang Gösterisi" frameborder="0" allowfullscreen></iframe>
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
