<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 21.10.2016
 * Time: 18:23
 */
include("../fonksiyon/session_control.php");
global $con;
if(isset($_GET['musteri_sil'])){

    $delete_id = $_GET['musteri_sil'];
    $musteri_sil = "delete  from musteri where id_musteri = '$delete_id'";
    $run_delete = mysqli_query($con, $musteri_sil);
    if($run_delete){

        echo "<script>alert('Bir Müsteri silindi!)</script>";
        echo "<script>window.open('index.php?musteri_goster', '_self')</script>";
    }
}

?>