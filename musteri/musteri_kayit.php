<!DOCTYPE>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html"/>
<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 28.09.2016
 * Time: 13:11
 */
session_start();
include("../fonksiyon/fonksiyon.php");

//include("include/db.php");
?>

<html>

<head>

    <title>firsat.com </title>

    <link rel="stylesheet" href="../styles/style.css" media="all"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

<!--main container başlangıç yeri.--->
<div class="main_wrapper">
<!--header  başlangıç yeri.--->
<div class="header_wrapper">

    <div style="height: 140px;">
        <a href="../index.php"><img id="logo" src="../resimler/Logo.jpg"/></a>
        <img id="banner" src="../resimler/gg.jpg"/>
    </div>
</div>
<!--header bitiş yeri.--->

<!--navigation bar başlangıç yeri.--->
<div class="menubar">

    <ul id="menu">
        <li><a href="../index.php">Anasayfa</a></li>
        <li><a href="../urunler.php">Ürünler</a></li>
        <li><a href="hesabim.php">Hesabım</a></li>
        <li><a href="#">KaydOl</a></li>
        <li><a href="../sepet.php">Alışveriş Sepeti</a></li>
        <li><a href="#">İletişim</a></li>
    </ul>

    <div id="form">
        <form method="get" action="../results.php" enctype="multipart/form-data">
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
<div id="alisveris_sepeti">
                                                 <span
                                                     style="float: right; font-size: 18px; padding: 5px; line-height:40px; ">Hoşgeldiniz!  <b
                                                         style="color:yellow">Alışveriş Sepeti
                                                         -</b>Toplam Adet: <?php Toplam_Adet(); ?>
                                                     Toplam Fiyat: <?php Toplam_Fiyat(); ?> <a
                                                         href="../sepet.php" style="color: yellow">Sepete Git</a>


                                                 </span>

</div>
<form action="musteri_kayit.php" method="post" enctype="multipart/form-data"/>
<table align="center" width="750" bgcolor="orange">

<tr>
    <td colspan="8">
        <h2>Yeni Hesap Oluştur</h2>
    </td>
</tr>
<tr>
    <td align="right"></td>
    <td></td>
</tr>


<tr>
    <td align="right"></td>
    <td></td>
</tr>

<tr>
    <td align="right"> Musteri Adı:</td>
    <td><input type="text" name="mus_adi"/></td>
</tr>

<tr>
    <td align="right">Soyadı:</td>
    <td><input type="text" name="mus_soyadi"/></td>
</tr>

<tr>
    <td align="right">Email:</td>
    <td><input type="text" name="mus_email"></td>
</tr>

<tr>
    <td align="right">Şifre:</td>
    <td><input type="password" name="mus_sifre"></td>
</tr>

<tr>
    <td align="right">Ülke:</td>

    <td>
        <select name="mus_ulke">

            <option>-------</option>
            <option value="TR">Türkiye</option>
            <option value="VI">ABD Virgin Adaları</option>
            <option value="DE">Almanya</option>
            <option value="US">Amerika Birleşik Devletleri</option>
            <option value="AD">Andorra</option>
            <option value="AG">Antigua ve Barbuda</option>
            <option value="AR">Arjantin</option>
            <option value="AL">Arnavutluk</option>
            <option value="AW">Aruba</option>
            <option value="AU">Avustralya</option>
            <option value="AT">Avusturya</option>
            <option value="AZ">Azerbaycan</option>
            <option value="BS">Bahama</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahreyn</option>
            <option value="BD">Bangladeş</option>
            <option value="BB">Barbados</option>
            <option value="BE">Belçika</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BY">Beyaz Rusya</option>
            <option value="AE">Birleşik Arap Emirlikleri</option>
            <option value="BO">Bolivya</option>
            <option value="BA">Bosna Hersek</option>
            <option value="BR">Brezilya</option>
            <option value="BN">Brunei</option>
            <option value="BG">Bulgaristan</option>
            <option value="MM">Burma</option>
            <option value="GI">Cebelitarık</option>
            <option value="CZ">Çek Cumhuriyeti</option>
            <option value="CN">Çin</option>
            <option value="DK">Danimarka</option>
            <option value="DO">Dominik Cumhuriyeti</option>
            <option value="EC">Ekvator</option>
            <option value="SV">El Salvador</option>
            <option value="ID">Endonezya</option>
            <option value="ER">Eritre</option>
            <option value="AM">Ermenistan</option>
            <option value="EE">Estonya</option>
            <option value="MA">Fas</option>
            <option value="FJ">Fiji</option>
            <option value="PH">Filipinler</option>
            <option value="FI">Finlandiya</option>
            <option value="FR">Fransa</option>
            <option value="PF">Fransız Polinezyası</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadalup</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="ZA">Güney Afrika</option>
            <option value="GE">Gürcistan</option>
            <option value="HR">Hırvatistan</option>
            <option value="IN">Hindistan</option>
            <option value="NL">Hollanda</option>
            <option value="AN">Hollanda Antilleri</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="VG">İngiliz Virginia Adaları</option>
            <option value="UK">İngiltere</option>
            <option value="IE">İrlanda</option>
            <option value="ES">İspanya</option>
            <option value="IL">İsrail</option>
            <option value="SE">İsveç</option>
            <option value="CH">İsviçre</option>
            <option value="IT">İtalya</option>
            <option value="IS">İzlanda</option>
            <option value="JM">Jamaika</option>
            <option value="JP">Japonya</option>
            <option value="KH">Kamboçya</option>
            <option value="CA">Kanada</option>
            <option value="QA">Katar</option>
            <option value="KY">Kayman Adaları</option>
            <option value="CY">Kıbrıs</option>
            <option value="CO">Kolombiya</option>
            <option value="KR">Kore</option>
            <option value="CR">Kosta Rika</option>
            <option value="KW">Kuveyt</option>
            <option value="CU">KÜba</option>
            <option value="LV">Letonya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Litvanya</option>
            <option value="LB">LÜbnan</option>
            <option value="LU">LÜksemburg</option>
            <option value="HU">Macaristan</option>
            <option value="MK">Makedonya</option>
            <option value="MV">Maldivler</option>
            <option value="MY">Malezya</option>
            <option value="MT">Malta</option>
            <option value="MU">Mauritius</option>
            <option value="MX">Meksika</option>
            <option value="EG">Mısır</option>
            <option value="MD">Moldova</option>
            <option value="MC">Monako</option>
            <option value="MZ">Mozambik</option>
            <option value="NI">Nikaragua</option>
            <option value="NO">Norveç</option>
            <option value="UZ">Özbekistan</option>
            <option value="PA">Panama</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PL">Polonya</option>
            <option value="PT">Portekiz</option>
            <option value="PR">Porto Riko</option>
            <option value="RO">Romanya</option>
            <option value="RU">Rusya</option>
            <option value="KN">Saint Kitts ve Nevis</option>
            <option value="LC">Saint Lucia</option>
            <option value="SM">San Marino</option>
            <option value="SN">Senegal</option>
            <option value="SC">Seyidel</option>
            <option value="SG">Singapur</option>
            <option value="SK">Slovakya</option>
            <option value="SI">Slovenya</option>
            <option value="LK">Sri Lanka</option>
            <option value="SY">Suriye</option>
            <option value="SA">Suudi Arabistan</option>
            <option value="CL">Şili</option>
            <option value="TH">Tayland</option>
            <option value="TW">Tayvan</option>
            <option value="TN">Tunus</option>
            <option value="TC">Turks ve Caicos Adaları</option>
            <option value="UA">Ukrayna</option>
            <option value="OM">Umman</option>
            <option value="UY">Uruguay</option>
            <option value="JO">Ürdün</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela</option>
            <option value="VN">Vietnam</option>
            <option value="NZ">Yeni Zelanda</option>
            <option value="GR">Yunanistan</option>
        </select>
    </td>

</tr>

<tr>
    <td align="right">Şehir:</td>
    <td>
        <select name="mus_sehir">
            <option>------
            <option>Adana</option>
            <option>Adıyaman</option>
            <option>Afyon</option>
            <option>Ağrı</option>
            <option>Amasya</option>
            <option>Ankara</option>
            <option>Antalya</option>
            <option>Artvin</option>
            <option>Aydın</option>
            <option>Balıkesir</option>
            <option>Bilecik</option>
            <option>Bingöl</option>
            <option>Bitlis</option>
            <option>Bolu</option>
            <option>Burdur</option>
            <option>Bursa</option>
            <option>Çanakkale</option>
            <option>Çankırı</option>
            <option>Çorum</option>
            <option>Denizli</option>
            <option>Diyarbakır</option>
            <option>Edirne</option>
            <option>Elazığ</option>
            <option>Erzincan</option>
            <option>Erzurum</option>
            <option>Eskişehir</option>
            <option>Gaziantep</option>
            <option>Giresun</option>
            <option>Gümüşhane</option>
            <option>Hakkari</option>
            <option>Hatay</option>
            <option>Isparta</option>
            <option>Mersin</option>
            <option>İstanbul</option>
            <option>İzmir</option>
            <option>Kars</option>
            <option>Kastamonu</option>
            <option>Kayseri</option>
            <option>Kırklareli</option>
            <option>Kırşehir</option>
            <option>Kocaeli</option>
            <option>Konya</option>
            <option>Kütahya</option>
            <option>Malatya</option>
            <option>Manisa</option>
            <option>K.maraş</option>
            <option>Mardin</option>
            <option>Muğla</option>
            <option>Muş</option>
            <option>Nevşehir</option>
            <option>Niğde</option>
            <option>Ordu</option>
            <option>Rize</option>
            <option>Sakarya</option>
            <option>Samsun</option>
            <option>Siirt</option>
            <option>Sinop</option>
            <option>Sivas</option>
            <option>Tekirdağ</option>
            <option>Tokat</option>
            <option>Trabzon</option>


        </select>
    </td>
</tr>

<tr>
    <td align="right">Adres:</td>
    <td><textarea cols="20" rows="10" name="mus_adres"></textarea></td>
</tr>

<tr>
    <td align="right">Telefon:</td>
    <td><input type="text" name="mus_telefon"></td>
</tr>

<tr>
    <td align="right">Profil:</td>
    <td><input type="file" name="mus_image"></td>
</tr>
<tr align="" center>
    <td colspan="6"><input type="submit" name="register" value="Hesap Oluştur"/></td>
</tr>

</table>
</form>
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
<?php

if (isset($_POST['register'])) {
    global $con;
    $ip = getIp();
    $mus_adi = $_POST['mus_adi'];

    $mus_soyadi = $_POST['mus_soyadi'];

    $mus_email = $_POST['mus_email'];

    $mus_sifre = $_POST['mus_sifre'];

    $mus_ulke = $_POST['mus_ulke'];

    $mus_sehir = $_POST['mus_sehir'];

    $mus_adres = $_POST['mus_adres'];
    $mus_telefon = $_POST['mus_telefon'];

    $mus_image = $_FILES['mus_image']['name'];
    $mus_image_tmp = $_FILES['mus_image']['tmp_name'];
    $mus_image = "musteri_image" . '/' . $mus_image;

    move_uploaded_file($mus_image_tmp, $mus_image);
    $insert_mus = "INSERT INTO `musteri` (`mus_ip`, `mus_adi`, `mus_soyadi`, `mus_email`, `mus_sifre`, `mus_ulke`, `mus_sehir`, `mus_adres`, `mus_telefon`, `mus_image`)
       values ('$ip','$mus_adi','$mus_soyadi','$mus_email','$mus_sifre','$mus_ulke','$mus_sehir','$mus_adres','$mus_telefon','$mus_image')";


    $run_mus = mysqli_query($con, $insert_mus);

    $sel_sepet = "select * from alisveris_sepeti where ip_addres ='$ip'";

    $run_sepet =mysqli_query($con, $sel_sepet);


    $check_sepet = mysqli_num_rows($run_sepet);


    if ($check_sepet == 0) {

        $_SESSION['mus_email'] = $mus_email;
        echo "<script>alert('Hesap başarıyla oluşturuldu, Teşekkürler!')</script>";
        echo "<script>window.open('musteri/hesabim.php','_self')</script>";

    } else {

        $_SESSION['mus_email'] = $mus_email;
        echo "<script>alert('Hesap başarıyla oluşturuldu, Teşekkürler!')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }

}

?>