<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 14.10.2016
 * Time: 17:08
 */

$con = mysqli_connect("localhost", "root", "", "firsat");

if (mysqli_connect_errno()) {

    echo "Bağlantı kurulamadı";
}

//Kullanıcı Ip adresi fonku
function getIp()
{
    $ip = $_SERVER['REMOTE_ADDR'];

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    return $ip;
}

//alış veriş sepeti fonksiyonu
function Alisveris_Sepeti()
{

    if (isset($_GET['sepete_ekle'])) {

        global $con;
        $ip = getIp();
        $id_urun = $_GET['sepete_ekle'];

        $urun_kontrol = "select * from alisveris_sepeti where ip_addres = '$ip' AND id_ur = '$id_urun'";

        $run_kontrol = mysqli_query($con, $urun_kontrol);

        if (mysqli_num_rows($run_kontrol) > 0) {

            echo " ";
        } else {

            $insert_urun = "insert into alisveris_sepeti (id_ur, ip_addres,miktar) values ('$id_urun','$ip','1')";

            $run_urun = mysqli_query($con, $insert_urun);

            echo "<script> window.open('index.php', '_self') </script>";
        }
    }
}

//Toplam ürün adedi fonksiyonu
function Toplam_Adet()
{
    global $con;
    if (isset($_GET['$sepete_ekle'])) {


        $ip = getIp();
        $get_adet = "select *from alisveris_sepeti where ip_addres ='$ip'";
        $run_adet = mysqli_query($con, $get_adet);
        $count_adet = mysqli_num_rows($run_adet);
    } else {
        $ip = getIp();
        $get_adet = "select *from alisveris_sepeti where ip_addres ='$ip'";
        $run_adet = mysqli_query($con, $get_adet);
        $count_adet = mysqli_num_rows($run_adet);
    }
    echo $count_adet;

}

//Toplam fiyat getirtme fonksiyonu

function Toplam_Fiyat()
{

    $toplam = 0;
    global $con;
    $ip = getIp();

    $sel_fiyat = "select * from alisveris_sepeti where ip_addres = '$ip'";
    $run_fiyat = mysqli_query($con, $sel_fiyat);

    while ($ur_fiyat = mysqli_fetch_array($run_fiyat)) {
        $id_urun = $ur_fiyat['id_ur'];
        $urun_fiyat = "select * from urunler where id_urun ='$id_urun'";
        $run_urun_fiyat = mysqli_query($con, $urun_fiyat);

        while ($uur_fiyat = mysqli_fetch_array($run_urun_fiyat)) {

            $urun_fiyat = array($uur_fiyat['urun_fiyat']);
            $values = array_sum($urun_fiyat);
            $toplam += $values;
        }
    }
    echo "$" . $toplam;
}

//kategorileri getirtme fonksiyonu

function getKategori()
{

    global $con;

    $get_kategori = "select * from kategoriler";

    $run_kategori = mysqli_query($con, $get_kategori);

    while ($row_kategori = mysqli_fetch_array($run_kategori)) {

        $id_kategori = $row_kategori['id_kategori'];
        $kategori_baslik = $row_kategori ['kategori_baslik'];


        echo "<li><a href='index.php?kategori=" . $id_kategori . "'>" . $kategori_baslik . "</a></li> ";

    }


}

//markaları getirtme fonksiyonu
function getMarka()
{

    global $con;
    $get_marka = "select * from markalar";
    $run_marka = mysqli_query($con, $get_marka);

    while ($row_marka = mysqli_fetch_array($run_marka)) {

        $id_marka = $row_marka['id_marka'];
        $marka_baslik = $row_marka ['marka_baslik'];


        echo "<li><a href='index.php?marka=" . $id_marka . "'>" . $marka_baslik . "</a></li> ";

    }

}

//ürünleri getirtme fonksiyonu
function getUrun()
{

//
//    if(isset ($_GET['kategori'])){
//
//      if(isset($_GET['marka'])){


    global $con;

    if (isset ($_GET['kategori'])) {
        $get_urun = "select * from urunler  where urun_kategori =" . $_GET['kategori'] . " order by RAND() LIMIT 0,6";
    } elseif (isset($_GET['marka'])) {
        $get_urun = "select * from urunler  where urun_marka =" . $_GET['marka'] . " order by RAND() LIMIT 0,6";
    } else {
        $get_urun = "select * from urunler order by RAND() LIMIT 0,6";
    }


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

                            <p><b>Fiyat $:$urun_fiyat</b></p>

                                <a href='detay.php?id_urun=$id_urun' style='float: left;'>Detay</a>
                                <a href='index.php?sepete_ekle=$id_urun'><button style='float: right'>Sepete Ekle</button></a>


                        </div>

                    ";
    }


//
//      }
//    }

}

//Kategorilerdeki ürünleri getirtme fonksiyonu
function getUrunKategori()
{


    if (isset ($_GET['kategori'])) {

        $id_kategori = $_GET['kategori'];

        global $con;

        $get_urun_kategori = "select * from urunler where urun_kategori = '$id_kategori'";

        $run_urun_kategori = mysqli_query($con, $get_urun_kategori);

        $count_kategoriler = mysqli_num_rows($run_urun_kategori);

        if ($count_kategoriler == 0) {

            echo "<h2 style='padding: 20px;'>Kategorilerde ürün bulunamadı!</h2>";
        }

        while ($row_urun_kategori = mysqli_fetch_array($run_urun_kategori)) {

            $id_urun = $row_urun_kategori['id_urun'];
            $urun_kategori = $row_urun_kategori['urun_kategori'];
            $urun_marka = $row_urun_kategori['urun_marka'];
            $urun_baslik = $row_urun_kategori['urun_baslik'];
            $urun_fiyat = $row_urun_kategori['urun_fiyat'];
            $urun_aciklama = $row_urun_kategori['urun_aciklama'];
            $urun_resim = $row_urun_kategori['urun_resim'];


            echo "
                        <div id= 'tek_urun'>

                            <h3>$urun_baslik</h3>
                            <img src='admin/urun_resim/$urun_resim' width='180' height='180'/>

                            <p><b>$urun_fiyat</b></p>

                                <a href='detay.php?id_urun=$id_urun' style='float: left;'>Detay</a>
                                <a href='index.php?sepete_ekle=$id_urun'><button style='float: right'>Sepete Ekle</button></a>


                        </div>

                    ";
        }
    }


}


//urun marka getirtme fonksiyonu

function getUrunMarka()
{


    if (isset ($_GET['marka'])) {

        $id_marka = $_GET['marka'];

        global $con;

        $get_urun_marka = "select * from urunler where urun_marka = '$id_marka'";

        $run_urun_marka = mysqli_query($con, $get_urun_marka);

        $count_markalar = mysqli_num_rows($run_urun_marka);

        if ($count_markalar == 0) {

            echo "<h2 style='padding: 20px;'>Markalarda ürün bulunamadı!</h2>";
        }

        while ($row_urun_marka = mysqli_fetch_array($run_urun_marka)) {

            $id_urun = $row_urun_marka['id_urun'];
            $urun_kategori = $row_urun_marka['urun_kategori'];
            $urun_marka = $row_urun_marka['urun_marka'];
            $urun_baslik = $row_urun_marka['urun_baslik'];
            $urun_fiyat = $row_urun_marka['urun_fiyat'];
            $urun_aciklama = $row_urun_marka['urun_aciklama'];
            $urun_resim = $row_urun_marka['urun_resim'];


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


}


