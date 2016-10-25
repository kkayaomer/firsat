
<?php
include("../fonksiyon/session_control.php");
?>

<!DOCTYPE>



 <html>

 <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
    <title>Admin Paneli</title>
    <link rel="stylesheet" href="style/style.css" media="all"/>
 </head>
    <body>

     <div class="main_wrapper">

             <div id="header"></div>
            <div id="right">
                <h2 style="text-align: center"> İçeriği Yönet</h2>
                <a href="index.php?urun_ekle">Yeni Ürün Ekle</a><br>
                <a href="index.php?urun_goster">Ürünleri Göster</a><br>
                <a href="index.php?kategori_ekle">Yeni Kategori Ekle</a><br>
                <a href="index.php?kategori_goster">Kategorileri Göster</a><br>
                <a href="index.php?marka_ekle">Yeni Marka Ekle</a><br>
                <a href="index.php?marka_goster">Markaları Göster</a><br>
                <a href="index.php?musteri_goster">Müşterileri Göster</a><br>
                <a href="index.php?siparis_goster">Siparişleri Göster</a><br>
                <a href="index.php?odeme_goster">Ödemeyi Göster</a><br>
                <a href="cikis.php">Admin Çıkış</a><br>
            </div>
           <div id="left">




                <?php

                if (isset($_GET['urun_ekle'])) {

                    include("urun_ekle.php");
                }
                if (isset($_GET['urun_goster'])) {

                    include("urun_goster.php");
                }
                if (isset($_GET['urun_duzenle'])) {

                    include("urun_duzenle.php");
                }
                if (isset($_GET['kategori_ekle'])) {

                    include("kategori_ekle.php");
                }
                if (isset($_GET['kategori_goster'])) {

                    include("kategori_goster.php");
                }
                if (isset($_GET['kategori_duzenle'])) {

                    include("kategori_duzenle.php");
                }
                if (isset($_GET['marka_ekle'])) {

                    include("marka_ekle.php");
                }
                if (isset($_GET['marka_goster'])) {

                    include("marka_goster.php");
                }
                if (isset($_GET['marka_duzenle'])) {

                    include("marka_duzenle.php");
                }
                if (isset($_GET['musteri_goster'])) {

                    include("musteri_goster.php");
                }
                ?>

          </div>

     </div>

    </body>

 </html>