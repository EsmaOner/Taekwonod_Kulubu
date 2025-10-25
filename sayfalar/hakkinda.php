<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hakkımızda</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right,rgb(110, 147, 187),rgb(25, 79, 133), rgb(6, 42, 86));
            margin: 0;
            padding: 0;
            color: #2c3e50;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            padding: 40px;
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 36px;
            color:rgb(9, 46, 68);
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.8;
            text-align: justify;
            margin-bottom: 20px;
        }

        .highlight {
            background-color:rgba(105, 226, 237, 0.47);
            padding: 10px 15px;
            border-left: 4px solid #3498db;
            margin: 20px 0;
            font-style: italic;
        }

        @media (max-width: 600px) {
            .container {
                margin: 20px;
                padding: 20px;
            }

            h1 {
                font-size: 28px;
            }

            p {
                font-size: 16px;
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
            <a href="index.php" style="color: white; text-decoration: none;">Hakkında</a>
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
        <h1>Hakkımızda</h1>
        <p>
            Taekwondo kulübümüz, disiplin, saygı ve özveri ilkeleriyle sporcular yetiştirmek amacıyla kurulmuştur.
            Yıllardır hem çocuklara hem de yetişkinlere yönelik eğitimler sunarak bireylerin fiziksel ve zihinsel gelişimine katkı sağlıyoruz.
        </p>
        <p>
            Eğitimlerimiz, alanında uzman ve tecrübeli eğitmenler eşliğinde, modern antrenman yöntemleriyle gerçekleştirilmektedir.
            Kulübümüz, sadece bir spor merkezi değil, aynı zamanda bir aile ortamı sunar.
        </p>
        <div class="highlight">
            “Sadece kazanmak değil, gelişmek ve öğrenmek de bir başarıdır.”
        </div>
        <p>
            Katılımcılarımıza özgüven, disiplin ve takım ruhu kazandırmak en büyük hedefimizdir.
            Taekwondo ile hem ruhen hem bedenen daha güçlü bireyler yetiştiriyoruz.
        </p>
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
