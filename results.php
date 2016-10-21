<!DOCTYPE>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 05.10.2016
 * Time: 13:11
 */
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

    <!--navigation bar başlangıç yeri.- -->
    <div class="menubar">

        <ul id="menu">
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="urunler.php">Ürünler</a></li>
            <li><a href="hesabim.php">Hesabım</a></li>
            <li><a href="#">KaydOl</a></li>
            <li><a href="sepet.php">Alışveriş Sepeti</a></li>
            <li><a href="#">İletişim</a></li>

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
            <div id="alisveris_sepeti">
                                             <span
                                                 style="float: right; font-size: 18px; padding: 5px; line-height:40px; ">Hoşgeldiniz!  <b
                                                     style="color:yellow">Alışveriş Sepeti -</b>Toplam Ürün: Toplam Fiyat: <a
                                                     href="sepet.php" style="color: yellow">Sepete Git</a>


                                             </span>

            </div>

            <!--Arama alanında anahtar kelimeye göre ürün arama-->

            <div id="urun_box">

                <?php

                if (isset($_GET['search'])) {


                    $search_query = $_GET['user_query'];

                    $get_urun = "select * from urunler where urun_anahtar_kelime like'%$search_query%'";

                    $run_urun = mysqli_query($con, $get_urun);

                    while ($row_urun = mysqli_fetch_array($run_urun)) {

                        $id_urun = $row_urun['id_urun'];
                        $urun_kategori = $row_urun['urun_kategori'];
                        $urun_marka = $row_urun['urun_marka'];
                        $urun_baslik = $row_urun['urun_baslik'];
                        $urun_fiyat = $row_urun['urun_fiyat'];
                        $urun_aciklama = $row_urun['urun_aciklama'];
                        $urun_resim = $row_urun['urun_resim'];


                        echo "
                                <div id= 'tek_urun'>

                                    <h3>$urun_baslik</h3>
                                    <img src='admin/urun_resim/$urun_resim' width='180' height='180'/>

                                    <p><b>$urun_fiyat</b></p>

                                    <a href='detay.php?id_urun=$id_urun' style='float: left;'>Detay</a>
                                    <a href='index.php'><button style='float: right'>Sepete Ekle</button></a>


                                </div>

                ";
                    }
                }
                ?>


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