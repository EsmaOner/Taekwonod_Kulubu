<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Eğitmenleri Düzenle</title>
    <style>
        body {
            background: white;
            color: black;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        form {
            width: 60%;
            margin: auto;
        }
        input, textarea, button {
            width: 100%;
            margin: 10px 0;
            padding: 12px;
        }
        .btn {
            background: #3498db;
            color: white;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background: red;
        }
    </style>
</head>
<body>
    <h1>Eğitmen Ekle / Güncelle</h1>
    <form method="post">
        <input type="text" name="ad" placeholder="Ad">
        <input type="text" name="soyad" placeholder="Soyad">
        <input type="text" name="unvan" placeholder="Ünvan">
        <textarea name="bio" placeholder="Kısa Biyografi"></textarea>
        <input type="text" name="foto" placeholder="Fotoğraf URL'si">
        <button class="btn">Kaydet</button>
    </form>
</body>
</html>