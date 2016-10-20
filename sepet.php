<!DOCTYPE>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 10.10.2016
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
            <?php Alisveris_Sepeti(); ?>
            <div id="alisveris_sepeti">
                                             <span style="float: right; font-size: 16px; padding: 5px; line-height:40px; ">

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
            <?php $ip = getIp(); ?>

            <div id="urun_box">

                <form action="" method="post" enctype="multipart/form-data">
                    <table align="center" width="700" bgcolor="#ff8c00">
                        <tr align="center">
                            <th>Kaldır(Remove)</th>
                            <th>Urun(Product)(S)</th>
                            <th>Miktar(Quantity)</th>
                            <th>Toplam Fiyat(Total Price)</th>

                        </tr>

                        <?php
                       // echo '<pre>';
                        //print_r($_POST['miktar']);
                        $toplam = 0;
                        global $con;
                        $ip = getIp();

                        $sel_fiyat = "select * from alisveris_sepeti where ip_addres = '$ip'";
                        $run_fiyat = mysqli_query($con, $sel_fiyat);

                        while ($ur_fiyat = mysqli_fetch_array($run_fiyat)) {
                            $id_urun = $ur_fiyat['id_ur'];
                            $sepet_miktar =  $ur_fiyat['miktar'];
                            $urun_fiyat = "select * from urunler where id_urun ='$id_urun'";
                            $run_urun_fiyat = mysqli_query($con, $urun_fiyat);

                            while ($uur_fiyat = mysqli_fetch_array($run_urun_fiyat)) {

                                $urun_fiyat = array($uur_fiyat['urun_fiyat']);
                                $urun_baslik = $uur_fiyat['urun_baslik'];
                                $urun_resim = $uur_fiyat['urun_resim'];
                                $tek_fiyat = $uur_fiyat['urun_fiyat'];
                                $values = array_sum($urun_fiyat);

                                $toplam += $values;


                                ?>
                                <tr>
                                    <td><input type="checkbox" name="remove[]" value="<?php echo $id_urun; ?>"/></td>
                                    <td><?php echo $urun_baslik; ?><br>
                                        <img src="admin/urun_resim/<?php echo $urun_resim; ?>" width="60"/>
                                    </td>
                                    <td><input type="text" size="4" name="miktar[<?php echo $ip ?>][<?=$id_urun?>]" value="<?php echo $sepet_miktar?>"/></td>
                                    <?php


                                    if (isset($_POST['update_sepet'])) {

                                        $miktar = $_POST['miktar'][$ip][$id_urun];
                                        $update_miktar = "update alisveris_sepeti set miktar =".$miktar ." where id_ur =".$id_urun." and ip_addres = '".$ip."'";
                                       // var_dump($update_miktar); exit;
                                        $run_miktar = mysqli_query($con, $update_miktar);

                                        //$_SESSION['miktar'] = $miktar;
                                        $toplam = $toplam*$miktar;

                                    }

                                    ?>
                                    <td><?php echo $tek_fiyat; ?></td>

                                </tr>

                            <?php
                            }
                        }

                        if(isset($_POST['miktar'])){
                           echo "<script>location.href='sepet.php';</script>";
                        }
                        ?>
                        <tr align="right">
                            <td colspan="4"><b>Toplam</b></td>
                            <td><?php echo $toplam; ?></td>
                        </tr>
                        <tr align="center">
                            <td colspan="2"><input type="submit" name="update_sepet" value="Sepeti Güncelle"/></td>
                            <td><input type="submit" name="continue" value="Alışverişe Devam"/></td>
                            <td><a href="musteri/checkout.php" style="text-decoration: none; color: black;">
                                    <button>Checkout
                                </a></button> </td>
                        </tr>
                    </table>
                </form>

                <?php
               global $con;
                $ip = getIp();
                function updatesepet(){
                if (isset($_POST['update_sepet'])) {

                    foreach ($_POST['remove'] as $id_remove) {
                        $delete_urun = "delete  from alisveris_sepeti where id_ur =".$id_remove." and ip_addres= '".$ip."'";

                        $run_delete = mysqli_query($con, $delete_urun);
                        if ($run_delete) {


                            echo "<script>window.open('sepet.php', '_self') </script>";
                        }
                    }
                }
                if (isset($_POST['continue'])) {
                    echo "<script>window.open('sepet.php', '_self') </script>";
                }
                echo @$up_sepet = updatesepet();
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