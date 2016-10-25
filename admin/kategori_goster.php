<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
<?php
include("../fonksiyon/db.php");
include("../fonksiyon/session_control.php");

?>
<table width = "795" align = "center" bgcolor ="orange">

    <tr align ="center">
        <td colspan="6"><h2>Bütün Kategorilerin Gösterim Yeri:</h2></td>
    </tr>

    <tr align = "center" bgcolor="#87ceeb">
        <th>id_Kategori</th>
        <th>Kategori Başlık</th>
        <th>Düzenle</th>
        <th>Sil</th>

    </tr>
    <?php
    global $con;
    $get_kategori = "select * from kategoriler";

    $run_kategori = mysqli_query($con, $get_kategori);
    $i = 0;

    while ($row_kategori = mysqli_fetch_array($run_kategori)){

        $id_kategori = $row_kategori['id_kategori'];
        $kategori_baslik = $row_kategori['kategori_baslik'];

        $i++;


        ?>
        <tr align ="center">
            <td><?php echo $i;?></td>
            <td><?php echo $kategori_baslik;?></td>

            <td><a href="index.php?kategori_duzenle=<?php echo $id_kategori;?>">Düzenle</a></td>
            <td><a href="kategori_sil.php?kategori_sil=<?php echo $id_kategori; ?>">Sil</a></td>
        </tr>
    <?php } ?>
</table>