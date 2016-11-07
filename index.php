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
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
</head>
<body>

<!--main container başlangıç yeri.--->
<div class="main_wrapper">
    <!--header  başlangıç yeri.--->
    <div class="header_wrapper">

        <a href="index.php" id="logo"><img alt="" src="resimler/Logo.jpg"/></a>
        <div class="product-slider">
            <div id="deneme">

                <div class="item"><img src="resimler/rr.jpg" alt="Owl Image"></div>
                <div class="item"><img src="resimler/kampanya.jpg" alt="Owl Image"></div>
              <div class="item"><img src="resimler/tel.jpg" alt="Owl Image"></div>
                <div class="item"><img src="resimler/sosyal-kampanya.png" alt="Owl Image"></div>
                <div class="item"><img src="resimler/beklenen-dev-kampanya.jpg" alt="Owl Image"></div>
                <div class="item"><img src="resimler/tel.jpg" alt="Owl Image"></div>

            </div>
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
                <marquee onmouseover_fckprotectedatt="%20onmouseover%3D%22this.stop()%22" onmouseout_fckprotectedatt="%20onmouseout%3D%22this.start()%22" scrollamount="4" scrolldelay="1" direction="up" width="100%" height="500" style="height: 400px; width: 100%;">  <br /> Ankaradaki Alarm İzleme <br /> Merkezi olan Firmalar <br /> hangileri?<br /> <a href="http://isacotur.tr.gg/Ankaradaki-Alarm-izleme-Merkezleri.htm" _fcksavedurl="http://isacotur.tr.gg/Ankaradaki-Alarm-izleme-Merkezleri.htm" target="_blank"> <img height="160" width="160" src="http://img.webme.com/pic/i/isacotur/alarmizlemefirlariankara.jpg" _fcksavedurl="http://img.webme.com/pic/i/isacotur/alarmizlemefirlariankara.jpg" alt="Ankaradaki Alarm İzleme  Merkezi olan Firmalar  hangileri?" /> <br /> <br /> e-devlet ile IMEI kaydı <br /> nasıl yapılır? <br /> </a><a href="http://isacotur.tr.gg/IMEI-KAYDI-e-devlet-den-NASIL-YAPILIR.htm" _fcksavedurl="http://isacotur.tr.gg/IMEI-KAYDI-e-devlet-den-NASIL-YAPILIR.htm" target="_blank"> <img height="160" width="160" src="http://img.webme.com/pic/i/isacotur/e-devletleimeikaydilogo.jpg" _fcksavedurl="http://img.webme.com/pic/i/isacotur/e-devletleimeikaydilogo.jpg" alt="e-devlet ile IMEI kaydı" /><br /> <br /> Bu numaradan aranırsanız<br /> ne yapmalısınız?<br /> </a><a href="http://isacotur.tr.gg/cep-telefonu-dolandiriciligi.htm" _fcksavedurl="http://isacotur.tr.gg/cep-telefonu-dolandiriciligi.htm" target="_blank"> <img height="160" width="160" src="http://img.webme.com/pic/i/isacotur/ceptelefonudolandiriciligi.jpg" _fcksavedurl="http://img.webme.com/pic/i/isacotur/ceptelefonudolandiriciligi.jpg" alt="Bu numaradan aranırsanız" /><br /> <br /> <br /> Sitenize hava durumu<br /> kodu eklemek isteyenler <br /> </a><a href="http://isacotur.tr.gg/hava-durumu-kodu.htm" _fcksavedurl="http://isacotur.tr.gg/hava-durumu-kodu.htm" target="_blank"> <img height="160" width="160" src="http://img.webme.com/pic/i/isacotur/havadurumukodlari1.jpg" _fcksavedurl="http://img.webme.com/pic/i/isacotur/havadurumukodlari1.jpg" alt="Sitenize hava durumu kodu ekle" /><br /> <br /> Türkiyenin Numara <br /> Taşıma maratonunu yazdık <br /> </a><a href="http://isacotur.tr.gg/Turkiye-Numara-Tasima.htm" _fcksavedurl="http://isacotur.tr.gg/Turkiye-Numara-Tasima.htm" target="_blank"> <img height="160" width="160" src="http://img.webme.com/pic/i/isacotur/turkiyenumaratasima.jpg" _fcksavedurl="http://img.webme.com/pic/i/isacotur/turkiyenumaratasima.jpg" alt="Türkiyenin Numara  Taşıma maratonunu yazdık" /> <br /> <br /> Yaz & Kış Saati  <br />uygulaması nedir? <a target="_blank" href="http://isacotur.tr.gg/Yaz-Kis-Saatine-Gecis.htm" _fcksavedurl="http://isacotur.tr.gg/Yaz-Kis-Saatine-Gecis.htm"><img title="Yaz & Kış Saati uygulaması nedir?" alt="Yaz & Kış Saati  uygulaması nedir?" width="160" height="160" src="http://img.webme.com/pic/i/isacotur/yaz-k%C4%B1ssaatinegecis.jpg" /></a> <br /> <br /> PARAMLA REZİL OLDUM                                      GAZETEYE VERDİM ÜNLÜ OLDUM <a target="_blank" href="http://isacotur.tr.gg/Paramla-Rezil-Oldum.htm" _fcksavedurl="http://isacotur.tr.gg/Paramla-Rezil-Oldum.htm"><img title="PARAMLA REZİL OLDUM                                      GAZETEYE VERDİM ÜNLÜ OLDUM" alt="PARAMLA REZİL OLDUM                                      GAZETEYE VERDİM ÜNLÜ OLDUM" width="160" longdesc="http://isacotur.tr.gg/PARAMLA-REZ%26%23304%3BL--.--.--.--.-.htm" height="160" src="http://img.webme.com/pic/i/isacotur/paramlareziloldum1.jpg" _fcksavedurl="http://img.webme.com/pic/i/isacotur/paramlareziloldum1.jpg" /></a> <br /> <br /> Herbalife Lisans İptali <a target="_blank" href="http://isacotur.tr.gg/Herbalife-Lisans-iptali.htm" _fcksavedurl="http://isacotur.tr.gg/Herbalife-Lisans-iptali.htm"><img title="Herbalife Lisans İptali için Tıklayın" alt="Herbalife Lisans İptali" width="160" height="160" src="http://img.webme.com/pic/i/isacotur/herbalifelisansiptali2013.jpg" _fcksavedurl="http://img.webme.com/pic/i/isacotur/herbalifelisansiptali2013.jpg" /></a><br /> <br /> Facebook Twitter Google+ Fan Kutusu EKLE <a target="_blank" href="http://isacotur.tr.gg/Fan-Box-Widgetleri.htm" _fcksavedurl="http://isacotur.tr.gg/Fan-Box-Widgetleri.htm"><img title="Facebook Twitter Google+ Fan Kutusu EKLE" alt="Facebook Twitter Google+ Fan Kutusu EKLE" width="160" height="160" src="http://img.webme.com/pic/i/isacotur/facegoogletwitterfanbox1.jpg" _fcksavedurl="http://img.webme.com/pic/i/isacotur/facegoogletwitterfanbox1.jpg" /></a> <br /> e-posta ile bize abone olun <a href="http://isacotur.tr.gg/Abonemiz-Olun.htm" _fcksavedurl="http://isacotur.tr.gg/Abonemiz-Olun.htm" _fcksavedurl="http://isacotur.tr.gg/Abonemiz-Olun.htm" target="_blank"><img src="http://picasion.com/pic80/8b9140ff0aa6bc0eaf5a245b78763374.gif" _fcksavedurl="http://picasion.com/pic80/8b9140ff0aa6bc0eaf5a245b78763374.gif" _fcksavedurl="http://picasion.com/pic80/8b9140ff0aa6bc0eaf5a245b78763374.gif" width="160" height="160" title="e-posta ile bize abone olun" alt="e-posta ile bize abone olun" /></a> <br /> </a></marquee>  <strong> </strong><strong>   </strong> <br />
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

        $("#deneme").owlCarousel({

            autoplay: true,
            autoplayTimeout: 3000,
            items : 2

        });
    });
</script>
<!--main container bitiş yeri-->
</body>

</html>