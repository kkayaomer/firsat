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

?>

<html>


<head>
    <title> Ürün Ekleme </title>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector: 'textarea' });</script>
</head>


<body bgcolor=#87ceeb>


<form action="urun_ekle.php" method="post" enctype="multipart/form-data">


    <table align="center" width="1000" border="2" bgcolor="orange">

        <tr align="center">

            <td colspan="7"><h2> Ekleme işlemi burada yapılacaktır..</h2></td>
        </tr>

        <tr>
            <td align="right"><b>Ürün Başlığı:</b></td>
            <td><input type="text" name="urun_baslik" size="60"/></td>
        </tr>


        <tr>
            <td align="right"><b>Ürün Kategorisi:</b></td>
            <td>
                <select name="urun_kategori">
                    <option>Bir Kategori Seçin</option>
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

                    <option>Bir marka seç</option>

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
            <td><input type="file" name="urun_resim"/></td>
        </tr>


        <tr>
            <td align="right"><b>Ürün Fiyatı:</b></td>
            <td><input type="text" name="urun_fiyat"/></td>
        </tr>


        <tr>
            <td align="right"><b>Ürün Açıklaması:</b></td>
            <td><textarea name="urun_aciklama" cols="20" rows="10"/></textarea> </td>
        </tr>


        <tr>
            <td align="right"><b>Ürün Anahtar Kelimeleri:</b></td>
            <td><input type="text" name="urun_anahtar_kelime" size="50"/></td>
        </tr>


        <tr align="center">

            <td colspan="8"><input type="submit" name="insert_post" value="Şimdi Ekle"/></td>

        </tr>

    </table>
    <?php

    if (isset($_POST['insert_post'])) {
        $urun_baslik = $_POST['urun_baslik'];
        $urun_kategori = $_POST['urun_kategori'];
        $urun_marka = $_POST['urun_marka'];
        $urun_fiyat = $_POST['urun_fiyat'];
        $urun_aciklama = $_POST['urun_aciklama'];
        $urun_anahtar_kelime = $_POST['urun_anahtar_kelime'];

        $urun_resim = $_FILES['urun_resim']['name'];
        $urun_resim_tmp = $_FILES['urun_resim']['tmp_name'];


        move_uploaded_file($urun_resim_tmp, "urun_resim/$urun_resim");

        $urun_ekle = "insert into urunler
            (urun_baslik, urun_kategori,urun_marka, urun_fiyat, urun_aciklama,urun_resim, urun_anahtar_kelime )
            values('$urun_baslik', '$urun_kategori', '$urun_marka', '$urun_fiyat', '$urun_aciklama', '$urun_resim', '$urun_anahtar_kelime')";


        $urun_ekle = mysqli_query($con, $urun_ekle);

        if ($urun_ekle) {

            echo "<script>alert('urun eklendi!')</script>";
            echo "<script>window.open('urun_ekle.php','_self')</script>";


        }


    }
    ?>
</form>


</body>

</html>

