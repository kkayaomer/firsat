
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<form action="" method="post" style=" padding: 60px;">

    <b>Yeni Kategori Ekle</b>
    <input type="text" name="yeni_kategori">
    <input type="submit" name="kategori_ekle" value="Yeni Kategori Ekle"/>


    </form>

<?php
include("../fonksiyon/session_control.php");
include("../fonksiyon/db.php");
if(isset($_POST['kategori_ekle'])){
$yeni_kategori = $_POST['yeni_kategori'];

$kategori_ekle = "insert into kategoriler (kategori_baslik) values  ('$yeni_kategori')";
$run_kategori = mysqli_query($con, $kategori_ekle);
if($run_kategori){

    echo "<script>alert('Yeni kategori eklendi!')</script>";
    echo "<script>window.open('index.php?kategori_goster', '_self')</script>";
}}

?>