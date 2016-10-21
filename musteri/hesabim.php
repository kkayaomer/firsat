<!DOCTYPE>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 18.10.2016
 * Time: 17:31
 */

include("fonksiyon/fonksiyon.php");
session_start();
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
            <a href="../index.php"><img id="logo" src="../resimler/logo.gif"/></a>
            <img id="banner" src="../resimler/banner.gif"/>
        </div>
    </div>
    <!--header bitiş yeri.--->

    <!--navigation bar başlangıç yeri.--->
    <div class="menubar">

        <ul id="menu">
            <li><a href="../index.php">Anasayfa</a></li>
            <li><a href="../urunler.php">Ürünler</a></li>
            <li><a href="hesabim.php">Hesabım</a></li>
            <li><a href="musteri_kayit.php">KaydOl</a></li>
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


                        <div id="sidebar_title"> Hesabım:</div>
                        <ul id="kategori">

                            <?php

//                            if(!isset($_SESSION[mus_email])){
//                                header('Location: checkout.php');
//                            }
                            $user = $_SESSION['mus_email'];

                            $get_img   = "select * from musteri where mus_email = '$user'";
                            $run_img   = mysqli_query($con, $get_img);
                            $row_img   = mysqli_fetch_array($run_img);
                            $mus_image = $row_img['mus_image'];
                            $mus_adi   = $row_img['mus_adi'];

                           // var_dump($row_img);
                            echo "<p style='text-align:center;'><img src='".$mus_image." 'width='150' height='150'/></p>";

                            ?>

                      <li><a href="hesabim.php?siparislerim">Siparişlerim</a></li>
                            <li><a href="hesabim.php?hesabi_duzenle">Hesabı Düzenle</a></li>
                            <li><a href="hesabim.php?sifreyi_degistir">Şifreyi Değiştir</a></li>
                            <li><a href="hesabim.php?hesabi_sil">Hasabı Sil</a></li>
                            <li><a href="cikis.php">Çıkış</a></li>

                        </ul>

               </div>
</div>

           <div id="content_area">
                    <?php Alisveris_Sepeti(); ?>
                   <div id="alisveris_sepeti">
                              <span style="float: right; font-size: 16px; padding: 5px; line-height:40px; ">
                                                                              <?php
                                                         if (isset($_SESSION['mus_email'])) {
                                                             echo "<b>Hoşgeldiniz:</b>".$_SESSION['mus_email'] ;

                                                         }

                                                         ?>

                                                           <?php

                                                           if (!isset($_SESSION['mus_email'])) {


                                                               echo "<a href ='checkout.php' style='color: orange'>Giriş</a>";

                                                           }

                                                           else {
                                                               echo "<a href ='cikis.php' style='color: orange'>Çıkış</a>";

                                                           }



                                                           ?>
                                                     </span>


                    </div>

                 <div id="urun_box"></div>
               <?php
  if(!isset($_GET['siparislerim'])){
      if(!isset($_GET['hesabi_duzenle'])){
          if(!isset($_GET['sifreyi_degistir'])){
              if(!isset($_GET['hesabi_sil'])){

             echo  "

               <h2 style='padding: 17px'>Hoşgeldiniz: $mus_adi</h2>
             <b>Bu bağlantıyı tıklayarak siparişlerinizi görebilirsiniz!<a href='hesabim.php?siparislerim'>Link</a> </b>";


              }
          }
      }
  }

     ?>
               <?php

               if(isset($_GET['hesabi_duzenle'])){

                   include("hesabi_duzenle.php");

               }
               if(isset($_GET['sifreyi_degistir'])){

                   include("sifreyi_degistir.php");

               }
               if(isset($_GET['hesabi_sil'])){

                   include("hesabi_sil.php");

               }

               ?>

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