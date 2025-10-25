<?php
session_start();
session_destroy();
header("Location: yonetici_giris.php");
exit();
