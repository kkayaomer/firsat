<!DOCTYPE>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 28.09.2016
 * Time: 13:11
 */
session_start();
include("fonksiyon/fonksiyon.php");

?>

<html>

<head>

    <title>firsat.com </title>

    <link rel="stylesheet" href="styles/style.css" media="all"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

<!--main container başlangıç yeri.--->
<div class="main_wrapper">
    <!--header  başlangıç yeri.--->
    <div class="header_wrapper">

        <div style="height: 140px;">
            <a href="index.php"><img id="logo" src="resimler/logo.gif"/></a>
            <img id="banner" src="resimler/banner.gif"/>
        </div>
    </div>
    <!--header bitiş yeri.--->

    <!--navigation bar başlangıç yeri.--->
    <div class="menubar">

        <ul id="menu">
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="urunler.php">Ürünler</a></li>
            <li><a href="musteri/hesabim.php">Hesabım</a></li>
            <li><a href="#">KaydOl</a></li>
            <li><a href="sepet.php">Alışveriş Sepeti</a></li>
            <li><a href="iletisim.php">İletişim</a></li>

        </ul>

        <div id="form">
            <form method="get" action="results.php" enctype="multipart/form-data">
                <input type="text" name="user_query" placeholder="Bir ürün ara"/>
                <input type="submit" name="search" value="search"/>
            </form>
        </div>

    </div>
    <!--navigation bar bitiş yeri.--->


    <!--content wrapper başlangıç--->
    <div class="content_wrapper">

        <div id="sidebar">
            <div class="sidebar-inner">


                <div id="sidebar_title"> Kategoriler</div>
                <ul id="kategori">

                    <?php getKategori(); ?>

                </ul>


                <div id="sidebar_title"> Markalar</div>
                <ul id="marka">

                    <?php getMarka(); ?>

                </ul>

            </div>
        </div>

        <div id="content_area">
            <?php Alisveris_Sepeti(); ?>
            <div id="alisveris_sepeti">  <span style="float: right; font-size: 16px; padding: 5px; line-height:40px; ">

                                                 <?php
                                                 if (isset($_SESSION['mus_email'])) {
                                                     echo "<b>Hoşgeldiniz:</b>".$_SESSION['mus_email'] ."<b style='color:yellow;'>Your</b>";

                                                 }
                                                 else {
                                                     echo "<b>Hoşgeldiniz Misafir</b>";
                                                 }
                                                 ?>

                    <b style="color:yellow">Alışveriş Sepeti
                        -</b>Toplam Adet: <?php Toplam_Adet(); ?>
                    Toplam Fiyat: <?php Toplam_Fiyat(); ?> <a
                        href="index.php" style="color: yellow">Alişverişe Geri Dön</a>


                    <?php

                    if (!isset($_SESSION['mus_email'])) {


                        echo "<a href ='musteri/checkout.php' style='color: orange'>Giriş</a>";

                    }
                    else {
                        echo "<a href ='cikis.php' style='color: orange'>Çıkış</a>";

                    }



                    ?>
                                             </span>


            </div>
            <?php echo $ip = getIp(); ?>

            <div id="urun_box">

                <?php getUrun(); ?>
                <?php getUrunKategori(); ?>
                <?php getUrunMarka(); ?>
            </div>

        </div>

    </div>
    <!--content wrapper bitiş--->


    <div id="footer">

        <h2 style="text-align: center; padding-top:20px; ">&copy; 2016 by www.firsat.com</h2>

    </div>

</div>
<script type="text/javascript">
    $(function () {
        $('.content_wrapper').css('min-height', $('.sidebar-inner').height());
    });
</script>
<!--main container bitiş yeri-->
</body>

</html>