<?php
include("../fonksiyon/db.php");
?>
 <table width = "795" align = "center" bgcolor ="orange">

  <tr align ="center">
      <td colspan="6"><h2>Bütün ürünlerin gösterim yeri:.</h2></td>
  </tr>

 <tr align = "center" bgcolor="#87ceeb">
     <th>S.N</th>
     <th>Başlık</th>
     <th>Resim</th>
     <th>Fiyat</th>
     <th>Düzenle</th>
     <th>Sil</th>

 </tr>
     <?php
     global $con;
     $get_urun = "select * from urunler";

     $run_urun = mysqli_query($con, $get_urun);
    $i = 0;

     while ($row_urun = mysqli_fetch_array($run_urun)){

         $id_urun = $row_urun['id_urun'];
         $urun_baslik = $row_urun['urun_baslik'];
         $urun_resim = $row_urun['urun_resim'];
         $urun_fiyat = $row_urun['urun_fiyat'];
         $i++;


     ?>
<tr align ="center">
    <td><?php echo $i;?></td>
    <td><?php echo $urun_baslik;?></td>
    <td><img src="urun_resim/<?php echo $urun_resim;?>" width="60" height="60"></td>
    <td><?php echo $urun_fiyat;?></td>
    <td><a href="index.php?urun_duzenle=<?php echo $id_urun;?>">Düzenle</a></td>
    <td><a href="urun_sil.php?urun_duzenle=<?php echo $id_urun; ?>">Sil</a></td>
</tr>
<?php } ?>
 </table>