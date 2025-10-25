<?php
// Bağlantı
$mysqli = new mysqli("localhost", "root", "", "taekwondo_kulubu");
if ($mysqli->connect_error) {
    die("Bağlantı hatası: " . $mysqli->connect_error);
}

$isim = $_POST['isim'] ?? '';
$email = $_POST['email'] ?? '';
$konu = $_POST['konu'] ?? '';
$mesaj = $_POST['mesaj'] ?? '';

if ($isim && $email && $konu && $mesaj) {
    $stmt = $mysqli->prepare("INSERT INTO mesajlar (isim, email, konu, mesaj) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $isim, $email, $konu, $mesaj);
    $stmt->execute();
    echo '<p>Mesajınız başarıyla gönderildi.</p>';
} else {
    echo '<p>Lütfen tüm alanları doldurun.</p>';
}

echo '<button class="btn-iletisim" onclick="window.location.href=\'iletisim.php\'">İletişim Sayfasına Dön</button>';
?>

<style>
    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f8fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        flex-direction: column;
        color: #333;
    }

    p {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }

    .btn-iletisim {
        background-color: #007BFF; /* Mavi renk */
        color: white;
        border: none;
        padding: 12px 28px;
        font-size: 1rem;
        border-radius: 6px;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0,123,255,0.3);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-iletisim:hover {
        background-color: #0056b3; /* Koyu mavi */
        box-shadow: 0 6px 12px rgba(0,86,179,0.5);
    }

    .btn-iletisim:active {
        background-color: #003d80; /* Daha koyu */
        box-shadow: none;
        transform: translateY(2px);
    }
</style>
