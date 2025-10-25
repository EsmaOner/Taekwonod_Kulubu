<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim Bilgilerini Düzenle</title>
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
    <h1>İletişim Bilgilerini Düzenle</h1>
    <form method="post">
        <input type="text" name="telefon" placeholder="Telefon">
        <input type="text" name="email" placeholder="E-Posta">
        <textarea name="adres" placeholder="Adres"></textarea>
        <button class="btn">Güncelle</button>
    </form>
</body>
</html>