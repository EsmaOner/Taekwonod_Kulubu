<?php include('./oturum_kapama.php'); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ana Sayfa Düzenle</title>
    <style>
        body {
    background-color: #000000;
    color: #000000;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 700px;
    margin: 60px auto;
    padding: 40px;
    text-align: center;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

h1 {
    margin-bottom: 30px;
}

.button {
    display: inline-block;
    background-color: #3498db;
    color: white;
    padding: 12px 25px;
    margin: 10px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #e74c3c;
}
    </style>
</head>
<body>
<div class="container">
    <h1>Ana Sayfa İçeriğini Düzenle</h1>
    <form method="post" action="">
        <textarea name="icerik" rows="10" cols="50" placeholder="Ana sayfa metnini buraya yaz..."></textarea><br>
        <button class="button" type="submit">Kaydet</button>
    </form>
</div>
</body>
</html>