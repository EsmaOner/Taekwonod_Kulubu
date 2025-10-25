<?php
session_start();
$_SESSION['yonetici'] = "admin";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ana Sayfa | Taekwondo Kulübü</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

       body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: url('fotolar/1.jpeg') no-repeat center center fixed;
    background-size: cover;        /* tam ekran kaplar */
    background-position: center;   /* ortalar */
    background-attachment: fixed;  /* kaydırmada sabit kalır */
    color: #2c3e50;
    margin: 0;
    padding-top: 100px; /* sabit header için */
}

        /* Sabit Header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgb(0, 0, 0);
            color: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            z-index: 1000; /* her şeyin üstünde kalsın */
        }

        header .header-inner {
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
            margin: 0 15px;
        }

        header a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1100px;
            margin: 50px auto;
            padding: 20px;
        }

        .hero {
            background-color: rgb(0, 0, 0);
            color: white;
            padding: 50px 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.6;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .card {
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin-bottom: 10px;
            color: rgb(0, 0, 0);
        }

        .card p {
            font-size: 15px;
            color: #555;
        }

        footer {
            background-color: rgb(0, 0, 0);
            color: #ecf0f1;
            padding: 30px 0;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 16px;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 60px;
        }

        /* Çıkış butonu */
        #cikis-buton {
            padding: 8px 12px;
            background-color: #8B0000;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        #cikis-buton:hover {
            background-color: #660000;
        }
    </style>
</head>
<body>

<?php if (isset($_SESSION['yonetici'])): ?>
    <form action="oturum_kapama.php" method="post" style="margin:0; position: fixed; top: 25px; right: 25px; z-index: 1100;">
        <button type="submit" id="cikis-buton">Çıkış</button>
    </form>
<?php endif; ?>

<header>
    <div class="header-inner">
        <div style="font-size: 24px; font-weight: bold;">
            <a href="ana_sayfa.php">Taekwondo Kulübü</a>
        </div>
        <nav>
            <a href="ana_sayfa.php">Ana Sayfa</a>
            <a href="sayfalar/hakkinda.php">Hakkında</a>
            <a href="sayfalar/egitmenler.php">Eğitmenler</a>
            <a href="etkinlikler.php">Etkinlikler</a>
            <a href="sayfalar/ders_programi.php">Ders Programı</a>
            <a href="sayfalar/iletisim.php">İletişim</a>
        </nav>
    </div>
</header>

<div class="container">
    <div class="hero">
        <h1>Taekwondo Kulübüne Hoş Geldiniz</h1>
        <p>Disiplin, güç ve özgüven kazandıran bir sporla tanışın. Eğitmenlerimiz eşliğinde, profesyonel ve güvenli bir ortamda taekwondo öğrenin.</p>
    </div>

    <div class="cards">
        <a href="taekwondo.php" style="text-decoration: none; color: inherit;">
            <div class="card">
                <h3>Taekwondo</h3>
                <p>Yumruk ve tekme tekniklerinin kullanıldığı, aynı zamanda beden ve zihni eğitme üzerine kurulu bir spordur.</p>
            </div>
        </a>

        <a href="uzmanegitmenler.php" style="text-decoration: none; color: inherit;">
            <div class="card">
                <h3>Uzman Eğitmenler</h3>
                <p>Alanında deneyimli antrenörler ile her seviyeye uygun eğitim programları.</p>
            </div>
        </a>

        <a href="sayfalar/ders_programi.php" style="text-decoration: none; color: inherit;">
            <div class="card">
                <h3>Ders Programı</h3>
                <p>Esnek ve katılımcı odaklı ders saatleriyle rahat bir öğrenim süreci.</p>
            </div>
        </a>

        <a href="etkinlikler.php" style="text-decoration: none; color: inherit;">
            <div class="card">
                <h3>Etkinlikler</h3>
                <p>Turnuvalar, kamp programları ve gösterilerle dolu bir takvim.</p>
            </div>
        </a>

        <a href="poomse.php" style="text-decoration: none; color: inherit;">
            <div class="card">
                <h3>Poomse</h3>
                <p>Temel teknikleri ve hareketleri içeren form çalışmalarıdır.</p>
            </div>
        </a>

        <a href="kyorigui.php" style="text-decoration: none; color: inherit;">
            <div class="card">
                <h3>Kyorigui</h3>
                <p>Kurallara göre puanlama ve rekabeti içeren müsabakalardır.</p>
            </div>
        </a>

        <a href="hosin_su.php" style="text-decoration: none; color: inherit;">
            <div class="card">
                <h3>Hosin Su</h3>
                <p>Kişisel savunma tekniklerini içeren bölümdür.</p>
            </div>
        </a>

        <a href="kyopka.php" style="text-decoration: none; color: inherit;">
            <div class="card">
                <h3>Kyopka</h3>
                <p>Taekwondo sporcularının güçlerini ve tekniklerini göstermeleri için yapılan kırışlardır.</p>
            </div>
        </a>
    </div>
</div>

<footer>
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <p style="margin: 0;">&copy; <?= date('Y') ?> Taekwondo Kulübü. Tüm hakları saklıdır.</p>
        <div style="margin-top: 10px;">
            <a href="sayfalar/hakkinda.php">Hakkımızda</a>
            <a href="sayfalar/iletisim.php">İletişim</a>
            <a href="giriş_kayıt/giris.php">Çıkış</a>
        </div>
    </div>
</footer>

</body>
</html>
