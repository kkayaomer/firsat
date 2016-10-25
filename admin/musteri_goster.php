<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<?php
include("../fonksiyon/db.php");
include("../fonksiyon/session_control.php");

?>
<table width = "795" align = "center" bgcolor ="orange">

    <tr align ="center">
        <td colspan="6"><h2>Bütün Müşterilerin gösterim yeri:.</h2></td>
    </tr>

    <tr align = "center" bgcolor="#87ceeb">
        <th>S.N</th>
        <th>Adı</th>
        <th>Email</th>
        <th>Resim</th>
        <th>Sil</th>

    </tr>
    <?php

    $get_mus = "select * from musteri";

    $run_mus = mysqli_query($con, $get_mus);
    $i = 0;

    while ($row_mus = mysqli_fetch_array($run_mus)){

        $id_musteri= $row_mus['id_musteri'];
        $mus_adi = $row_mus['mus_adi'];
//        $mus_soyadi = $row_mus['mus_soyadi'];
        $mus_email = $row_mus['mus_email'];
        $mus_image = $row_mus['mus_image'];
        $i++;


        ?>
        <tr align ="center">
            <td><?php echo $i;?></td>
            <td><?php echo $mus_adi;?></td>
            <td><?php echo $mus_email;?></td>
            <td><img src="../musteri/musteri_image/<?php echo $mus_image;?>" width="50" height="50"></td>
        </tr>  <td><a href="musteri_sil.php?musteri_sil=<?php echo $id_musteri; ?>">Sil</a></td>
    <?php } ?>
</table>