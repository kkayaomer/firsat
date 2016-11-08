<?php

session_start();
session_destroy();


echo "<script>window.open('login.php?cikis=Çıkış yaptığınızdan dolayı, giriş için tekrar dene!!', '_self')</script>";
?>