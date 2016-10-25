<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<?php
include("../fonksiyon/db.php");
include("../fonksiyon/session_control.php");

?>
<table width = "795" align = "center" bgcolor ="orange">

    <tr align ="center">
        <td colspan="6"><h2>Bütün Markaların Gösterim Yeri:</h2></td>
    </tr>

    <tr align = "center" bgcolor="#87ceeb">
        <th>id_Marka</th>
        <th>Marka Başlık</th>
        <th>Düzenle</th>
        <th>Sil</th>

    </tr>
    <?php
    global $con;
    $get_marka = "select * from markalar";

    $run_marka = mysqli_query($con, $get_marka);
    $i = 0;

    while ($row_marka = mysqli_fetch_array($run_marka)){

        $id_marka = $row_marka['id_marka'];
        $marka_baslik = $row_marka['marka_baslik'];

        $i++;


        ?>
        <tr align ="center">
            <td><?php echo $i;?></td>
            <td><?php echo $marka_baslik;?></td>

            <td><a href="index.php?marka_duzenle=<?php echo $id_marka;?>">Düzenle</a></td>
            <td><a href="marka_sil.php?marka_sil=<?php echo $id_marka; ?>">Sil</a></td>
        </tr>
    <?php } ?>
</table>