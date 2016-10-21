<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 21.10.2016
 * Time: 18:23
 */

if(isset($_GET['urun_sil'])){

    $delete_id = $_GET['urun_sil'];
  $urun_sil = "delete * from urunler where id_urun = '$delete_id'";
 $run_delete = mysqli_query($con, $urun_sil);
    if($run_delete){

        echo "<script>alert('Bir ürün silindi!)</script>";
        echo "<script>window.open('index.php?urun_goster', '_self')</script>";
    }
}

?>