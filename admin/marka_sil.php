<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 21.10.2016
 * Time: 18:23
 */
include("../fonksiyon/session_control.php");
if(isset($_GET['marka_sil'])){

    $delete_id = $_GET['marka_sil'];
    $marka_sil = "delete * from markalar where id_marka = '$delete_id'";
    $run_delete = mysqli_query($con, $marka_sil);
    if($run_delete){

        echo "<script>alert('Bir Marka silindi!)</script>";
        echo "<script>window.open('index.php?marka_goster', '_self')</script>";
    }
}

?>