<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 21.10.2016
 * Time: 18:23
 */

include("../fonksiyon/db.php");
include("../fonksiyon/session_control.php");
if(isset($_GET['kategori_sil'])){

    $delete_id = $_GET['kategori_sil'];
    $kategori_sil = "delete  from kategoriler where id_kategori = '$delete_id'";
    $run_delete = mysqli_query($con, $kategori_sil);
    if($run_delete){

        echo "<script>alert('Bir kategori silindi!)</script>";
        echo "<script>window.open('index.php?kategori_goster', '_self')</script>";
    }
}

?>