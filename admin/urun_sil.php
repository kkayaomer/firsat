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


if(isset($_GET['urun_sil'])){

    $delete_id = $_GET['urun_sil'];

  $urun_sil = "delete  from urunler where id_urun = '$delete_id'";

 $run_delete = mysqli_query($con, $urun_sil);
    if($run_delete){
        echo "<script>alert('Ürün silindi!')</script>";
        echo "<script>window.open('index.php?urun_goster', '_self')</script>";
    }
}

?>