<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Taekwondo Hakkında</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right,rgb(0, 0, 0),rgb(255, 255, 255));
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
            color:rgb(0, 0, 0);
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.8;
            text-align: justify;
            margin-bottom: 20px;
        }

        .highlight {
            background-color: #eaf2f8;
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
            <a href="ana_sayfa.php" style="color: white; text-decoration: none;">Taekwondo</a>
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
        <h1>Taekwondo Hakkında</h1>
        <p>
             TAE; Ayak, KWON; El anlamına gelmektedir. DO ise, ahlak ve fazilete ulaşmak için takip edilmesi gereken düşünce ve davranış biçimidir.
             Taekwondo kelime anlamıyla el ve ayaklarla uygulanan savunma ve vuruş tekniklerinden oluşan, 
             sporcuda ahlaki değerlerin yüceltilmesine katkıda bulunan bir spor dalıdır.
             Taekwondo, uzak doğu ülkelerinden KORE’ nin Milli sporu olup, bu ülkede doğmuş, gelişmiş ve zamanla Dünya’ya yayılmıştır. 
             Geçmişi 13 Asır öncelerine dayanmaktadır. Nitekim o çağlarda KORE’de yaşayan insanlar doğaya, 
             vahşi hayvanlara ve haydutlara karşı kendilerini savunmak için tamamiyle ayak tekniklerini içeren bir savunma sistemi geliştirmişler ve 
             buna “TAEGYON” yani “Ayak Sistemi” adını vermişlerdir. 
             Yine aynı çağlarda KORE’ de uygulanmakta olan “KWONPOP” yani “Yumruk Metodu” olarak isimlendirilen sadece el tekniklerini içeren bir sistem daha bulunmakta idi. 
             Bu arada 600’lü yıllarda KORE Yarımadası 3 Krallığa bölünmüş ve bu krallıkların en küçüğü olan SİLLA Krallığının genç asilleri ve 
             savaşçıları kullandıkları çeşitli savaş silahlarının yanısıra yukarıdaki el ve ayak tekniklerini geliştirerek bir savaş aracı olarak kullanmak suretiyle silahsız savaş çalışmalarına da önem verip kendilerini düşmanlara karşı daha güçlü duruma getirmişlerdir. 
             İşte bu insanlar el ve ayakla yaptıkları savunma tekniklerini, zamanla sistemleştirerek adına Taek-Kyon demişlerdir. Böylece de Taekwondo’ nun ilk temelleri oluşmuştur.
        </p>
        <p>
           Taekwondo 20. Yüzyıla gelene kadar geçirmiş olduğu evrimler sonucunda bu günkü şekline dönüşmüş, 
           1905 yılında da bir yarışma sporu olarak kabul edilmiştir. Nihayet 1966 yılında Uluslararası Taekwondo Federasyonu kurulmuştur. 
           208 ülke bu Federasyona üye olup, bu gün Taekwondo milyonlarca insanın yaptığı bir spor dalı haline gelmiştir. 
           Taekwondo sporunun Ülkemize gelişi de 1960’lı yıllara rastlamaktadır. 
           1968 yılında resmi olarak Judo Federasyonu bünyesinde faaliyetlerini sürdürmeye başlamış 
           ilk defa 1976 yılına resmi olarak Avrupa Şampiyonasına katılmış ve Ülkemiz takım halinde Avrupa İkincisi olmuştur. 
        </p>

        <p>
            1981 yılında Judo Federasyonu’ndan ayrılarak müstakil Federasyon olan Taekwondo Federasyonu Başkanlığına Mithat KOR getirilmiştir. 
            Mithat KOR’ un Başkanlığı kısa sürmüş (12.01.1981-22.02.1982) 1982-1995 yılları arasında da Taekwondo Federasyonu Başkanlığını 
            Prof. Dr. Esen BEDER yapmıştır. 1982 yılında Prof. Dr. Esen BEDER başkanlığında oluşan federasyon kurullarının çalışmaları başarı grafiğini arttırmış 
            bu çalışmada Teknik Direktör olarak görev üstlenen İsmet IRAZ’ın bilinçli, disiplinli çalışma ve isabetli karar görüşleri ile ülkemizde Taekwondo’nun yapılması hızla devam etmiş, 
            uluslararası alanda da bir çok başarılara imza atılmıştır. 
        </p>

         <p>
           1996-2003 yıllarında başkanlık görevini yürüten Cengiz YAĞIZ’ın görevden alınmasıyla yerine 
           Prof. Dr. Metin ŞAHİN Federasyon Başkanlığına seçilmiş ve 21 yıl boyunca bu görevi yürütmüştür. 
        </p>

        <p>
            Federasyonumuzun 20 Ekim 2024 tarihinde yapılan genel kurulunda başkanlığa 3 kez dünya, 
            2 kez Avrupa şampiyonu olmuş, Atina 2004 Olimpiyat Oyunları ikincisi Bahri Tanrıkulu seçilmiştir. 
        </p>

         <p>
            Katıldığı tüm olimpiyat oyunlarından madalya ile ayrılan Türk taekwondosu 2012 yılında Servet Tazegül ile Londra Olimpiyat Oyunları’nda 
            altın madalya kazanarak zirveye çıkmıştır. 2012 yılında Londra’da gümüş madalya kazanan Nur Tatar ise, 
            2016 yılında Rio Olimpiyat Oyunları’nda bronz madalya elde ederek, üst üste 2 olimpiyat oyununda madalya kazanan ilk Türk kadın sporcu ünvanını kazanmıştır. 
            Türkiye Taekwondo Federasyonu 2000-2024 yılları arasında olimpiyat oyunlarında 1 altın, 3 gümüş ve 6 bronz madalya kazanmıştır. 
            Ülkemiz, 2020 yılında paralimpik oyunlara dahil olan Para taekwondo branşında ise günümüze kadar 1 altın, 4 gümüş ve 2 bronz madalya elde etmiştir. 
        </p>

        <div class="highlight">
            “Sadece kazanmak değil, gelişmek ve öğrenmedek  bir başarıdır.”
        </div>

         <p>
            Federasyonumuzun 20 Ekim 2024 tarihinde yapılan genel kurulunda başkanlığa 3 kez dünya, 
            2 kez Avrupa şampiyonu olmuş, Atina 2004 Olimpiyat Oyunları ikincisi Bahri Tanrıkulu seçilmiştir.
            Türkiye Taekwondo Federasyonu 800 bine yaklaşan lisanslı sporcu sayısı ile ülkemizde futbol ve 
            satranç branşlarının ardından en çok sporcuya sahip federasyon olurken, kazandığı madalya sayısı ile de 
            her zaman ilk 5 içinde yer almıştır. 
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
