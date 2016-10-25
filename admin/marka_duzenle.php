<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<?php

include("../fonksiyon/db.php");
include("../fonksiyon/session_control.php");
if(isset($_GET['marka_duzenle'])){
    $id_marka = $_GET['marka_duzenle'];

    $get_marka = "select * from markalar where id_marka = '$id_marka'";

    $run_marka = mysqli_query($con, $get_marka);
    $row_marka = mysqli_fetch_array( $run_marka);
    $id_marka = $row_marka['id_marka'];
    $marka_baslik = $row_marka['marka_baslik'];


}


?>

<form action = "" method = "post" style=" padding: 60px;">

    <b>Marka Güncelle</b>
    <input type="text" name="yeni_marka" value="<?php echo $marka_baslik; ?>">
    <input type="submit" name="marka_ekle" value=" Marka Güncelle"/>


</form>

<?php

if(isset($_POST['marka_guncelle'])){
    $update_id = $id_marka;
    $yeni_marka = $_POST['yeni_marka'];

    $marka_guncelle = "update markalar set marka_baslik = '$marka_baslik' where  id_marka = '$update_id'";
    $run_marka = mysqli_query($con, $marka_guncelle);
    if($run_guncelle){

        echo "<script>alert('Marka guncelendi!')</script>";
        echo "<script>window.open('index.php?marka_goster', '_self')</script>";
    }}

?>