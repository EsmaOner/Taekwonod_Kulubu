<?php
session_start();
session_unset();
session_destroy();
header("Location:giriş_kayıt/giris.php");
exit;
