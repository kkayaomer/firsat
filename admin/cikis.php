<?php

session_start();
session_destroy();


echo "<script>window.open('login.php?cikis=You have logged out, come back soon!', '_self')</script>";
?>