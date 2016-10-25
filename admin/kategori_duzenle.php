<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<?php
include("../fonksiyon/db.php");
include("../fonksiyon/session_control.php");
if(isset($_GET['kategori_duzenle'])){
    $id_kategori = $_GET['kategori_duzenle'];

    $get_kategori = "select * from kategoriler where id_kategori = '$id_kategori'";

    $run_kategori = mysqli_query($con, $get_kategori);
    $row_kategori = mysqli_fetch_array( $run_kategori);
    $id_kategori = $row_kategori['id_kategori'];
    $kategori_baslik = $row_kategori['kategori_baslik'];


}

?>
<form action = "" method = "post" style=" padding: 60px;">

    <b>Kategori Güncelleme</b>
    <input type="text" name="yeni_kategori" value="<?php echo $kategori_baslik; ?>">
    <input type="submit" name="kategori_guncelle" value=" Kategori Güncelleme"/>


</form>

<?php

if(isset($_POST['kategori_guncelle'])){
    $update_id = $id_kategori;
    $yeni_kategori = $_POST['yeni_kategori'];

    $kategori_guncelle = "update kategoriler set kategori_baslik ='$yeni_kategori' where  id_kategori ='$update_id'";
    $run_kategori = mysqli_query($con, $kategori_guncelle);
    if($run_kategori){

        echo "<script>alert(' Kategori güncellendi!')</script>";
        echo "<script>window.open('index.php?kategori_goster', '_self')</script>";
    }}

?>