<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 24.10.2016
 * Time: 17:42
 */

if(!isset($_SESSION))
{
    session_start();
}
if(!isset($_SESSION['kullanici_email'])){

    echo "<script>window.open('login.php?not_admin=You are not an Admin!', '_self')</script>";
//    echo "<script>window.open('../admin/login.php?not_admin=You are not an Admin!', '_self')</script>";

}