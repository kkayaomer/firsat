<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 07.11.2016
 * Time: 10:12
 */


session_start();
$kod=substr(md5(rand(0,999999)),0,6);

$font="HoboStd.otf";

$_SESSION["kod"]=$kod;



$rsm=imagecreate(140,65);

$beyaz=ImageColorAllocate($rsm,rand(0,255),rand(0,255),rand(0,255));

$mavi=ImageColorAllocate($rsm,rand(0,255),rand(0,255),rand(0,255));



imagefill($rsm,4,5,$mavi);



imagettftext($rsm,15,rand(-15,15),20,40,$beyaz,$font,$kod);





header("Content-type: image/png");

ImagePNG($rsm);

ImageDestroy($rsm);

