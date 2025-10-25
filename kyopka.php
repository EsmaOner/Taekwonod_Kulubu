<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kyopka (Kırış Teknikleri)</title>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: linear-gradient(to right,rgb(89, 5, 5),rgb(255, 255, 255));
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #b23c17;
            text-align: center;
            margin-bottom: 30px;
        }

        p {
            line-height: 1.8;
            color: #333;
            font-size: 17px;
        }

        .highlight-box {
            background-color: #fce4ec;
            padding: 15px 20px;
            border-left: 6px solid #c2185b;
            margin: 25px 0;
            border-radius: 6px;
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
            <a href="ana_sayfa.php" style="color: white; text-decoration: none;">Kyopka</a>
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
        <h1>Kyopka Nedir? (Kırış Teknikleri)</h1>

        <p>
            <strong>Kyopka</strong> ya da diğer adıyla <em>Kırış</em>, Taekwondo'da el, ayak, dirsek gibi uzuvlarla tahtaları, kiremitleri veya diğer objeleri kırma çalışmasıdır.
        </p>

        <div class="highlight-box">
            Kyopka, yalnızca fiziksel güç değil, aynı zamanda teknik doğruluk, odaklanma ve zamanlamanın birleşimini gerektirir.
        </div>

        <p>
            Genellikle gösteri, sınav veya müsabakalarda kullanılır. Kırış hareketi bir tekniğin ne kadar etkili yapıldığını göstermek açısından önemlidir.
        </p>

        <h3>Kyopka'nın Amaçları:</h3>
        <ul>
            <li>Tekniğin doğru uygulanmasını test etmek</li>
            <li>Gücü, hızı ve odağı geliştirmek</li>
            <li>Özgüven kazanmak</li>
            <li>Sınav ve performans değerlendirmelerinde kullanmak</li>
        </ul>

        <h3>Yaygın Kullanılan Kyopka Teknikleri:</h3>
        <ul>
            <li>El kenarıyla kırış (Sonkal Taerigi)</li>
            <li>Ön tekme ile kırış (Ap Chagi)</li>
            <li>Döner tekme (Dollyo Chagi)</li>
            <li>Çift el kırış</li>
            <li>Zıplayarak tekme kırış (Twimyo Ap Chagi)</li>
        </ul>

        <p>
            Kırış sırasında kullanılan tahtaların kalınlığı yaşa ve seviyeye göre değişir. Başarılı bir kyopka, konsantrasyon ve nefes kontrolü ile birleştiğinde oldukça etkileyici bir gösteri haline gelir.
        </p>

        <div class="video-container">
            <h3>Kyopka Gösterisi</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/V95O0NjmAyg" title="Kyopka Kırış Gösterisi" frameborder="0" allowfullscreen></iframe>
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
