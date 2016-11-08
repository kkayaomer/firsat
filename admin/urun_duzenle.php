<!DOCTYPE>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 28.09.2016
 * Time: 13:11
 */
$con = mysqli_connect("localhost", "root", "", "firsat");
include("../fonksiyon/session_control.php");
?>
<?php

if(isset($_GET['urun_duzenle'])){
    $get_id = $_GET['urun_duzenle'];
    $get_urun = "select * from urunler where id_urun = '$get_id'";
    $run_urun = mysqli_query($con, $get_urun);
    $i = 0;

  $row_urun = mysqli_fetch_array($run_urun);

      $id_urun = $row_urun['id_urun'];
      $urun_baslik = $row_urun['urun_baslik'];
      $urun_resim = $row_urun['urun_resim'];
      $urun_fiyat = $row_urun['urun_fiyat'];
      $urun_aciklama = $row_urun['urun_aciklama'];
      $urun_anahtar_kelime = $row_urun['urun_anahtar_kelime'];
      $urun_kategori = $row_urun['urun_kategori'];
      $urun_marka = $row_urun['urun_marka'];

    $get_kategori = "select * from kategoriler where id_kategori = '$urun_kategori'";
    $run_kategori = mysqli_query($con, $get_kategori);
    $row_kategori = mysqli_fetch_array($run_kategori);
    $kategori_baslik = $row_kategori['kategori_baslik'];

    $get_marka = "select * from markalar where id_marka = '$urun_marka'";
    $run_marka = mysqli_query($con, $get_marka);
    $row_marka = mysqli_fetch_array($run_marka);
    $marka_baslik = $row_marka['marka_baslik'];

}

?>
<html>


<head>
    <title> Ürün Güncelle </title>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector: 'textarea' });</script>
</head>


<body bgcolor=#87ceeb>


<form action=" " method="post" enctype="multipart/form-data">


    <table align="center" width="795" border="2" bgcolor="orange">

        <tr align="center">

            <td colspan="7"><h2> Ürün güncelleme ve Düzenleme</h2></td>
        </tr>

        <tr>
            <td align="right"><b>Ürün Başlığı:</b></td>
            <td><input type="text" name="urun_baslik" size="60" value="<?php echo $urun_baslik;?>"/></td>
        </tr>


        <tr>
            <td align="right"><b>Ürün Kategorisi:</b></td>
            <td>
                <select name="urun_kategori">
                    <option><?php echo $kategori_baslik; ?></option>
                    <?php
                    global $con;
                    $get_kategori = "select * from kategoriler";

                    $run_kategori = mysqli_query($con, $get_kategori);


                    while ($row_kategori = mysqli_fetch_array($run_kategori)) {

                        $id_kategori = $row_kategori['id_kategori'];
                        $kategori_baslik = $row_kategori ['kategori_baslik'];


                        echo "<option value='$id_kategori'>" . $kategori_baslik . "</option> ";

                    }
                    ?>
                </select>

            </td>
        </tr>


        <tr>
            <td align="right"><b>Ürün Markası:</b></td>
            <td>
                <select name="urun_marka">

                    <option><?php echo $marka_baslik; ?></option>

                    <?php


                    $get_marka = "select * from markalar";
                    $run_marka = mysqli_query($con, $get_marka);

                    while ($row_marka = mysqli_fetch_array($run_marka)) {

                        $id_marka = $row_marka['id_marka'];
                        $marka_baslik = $row_marka ['marka_baslik'];


                        echo "<option value='$id_marka'>" . $marka_baslik . "</option> ";
                    }

                    ?>

                </select>

            </td>
        </tr>


        <tr>
            <td align="right"><b>Ürün Resmi:</b></td>
            <td><input type="file" name="urun_resim"/><img src="urun_resim/<?php echo $urun_resim; ?>" width="60" height="60"/></td>
        </tr>

        <tr>
            <td align="right"><b>Ürün Fiyatı:</b></td>

            <td><input type="text" name="urun_fiyat"size="7" value=" <?php echo $urun_fiyat;?>"/></td>
        </tr>

        <tr>
            <td align="right"><b>Ürün Açıklaması:</b></td>
            <td><textarea name="urun_aciklama" cols="20" rows="10" "<?php echo $urun_aciklama; ?>"/></textarea> </td>
        </tr>


        <tr>
            <td align="right"><b>Ürün Anahtar Kelimeleri:</b></td>
            <td><input type="text" name="urun_anahtar_kelime" size="50" value= "<?php echo $urun_anahtar_kelime; ?>"/></td>
        </tr>


        <tr align="center">

            <td colspan="8"><input type="submit" name="update_urun" value="Ürün Güncelle"/></td>

        </tr>

    </table>
    <?php

    if (isset($_POST['update_urun'])) {

        $update_id = $id_urun;
        $urun_baslik = $_POST['urun_baslik'];
        $urun_kategori = $_POST['urun_kategori'];
        $urun_marka = $_POST['urun_marka'];

        $urun_fiyat = $_POST['urun_fiyat'];
        $urun_aciklama = $_POST['urun_aciklama'];
        $urun_anahtar_kelime = $_POST['urun_anahtar_kelime'];

        $urun_resim = $_FILES['urun_resim']['name'];
        $urun_resim_tmp = $_FILES['urun_resim']['tmp_name'];


        move_uploaded_file($urun_resim_tmp, "urun_resim/$urun_resim");

        $urun_update = "update urunler set urun_kategori = '$urun_kategori', urun_marka = '$urun_marka', urun_baslik = '$urun_baslik', urun_fiyat = '$urun_fiyat', urun_aciklama = '$urun_aciklama', urun_resim = '$urun_resim'
        , urun_anahtar_kelime = '$urun_anahtar_kelime' where id_urun = '$update_id'";



        $run_urun = mysqli_query($con, $urun_update);

        if ($run_urun) {

            echo "<script>alert('Urun güncellendi!')</script>";
            echo "<script>window.open('index.php?urun_goster','_self')</script>";


        }


    }
    ?>
</form>


</body>

</html>

