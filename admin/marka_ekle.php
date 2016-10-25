
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<form action = "" metod = "post" style=" padding: 60px;">

    <b>Yeni Marka Ekle</b>
    <input type="text" name="yeni_marka">
    <input type="submit" name="marka_ekle" value="Yeni Marka Ekle"/>


</form>

<?php
include("../fonksiyon/db.php");
include("../fonksiyon/session_control.php");
if(isset($_POST['marka_ekle'])){
    $yeni_marka = $_POST['yeni_marka'];

    $marka_ekle = "insert into markalar (marka_baslik) values  ('$yeni_marka')";
    $run_marka = mysqli_query($con, $marka_ekle);
    if($run_marka){

        echo "<script>alert('Yeni marka eklendi!')</script>";
        echo "<script>window.open('index.php?marka_goster', '_self')</script>";
    }}

?>