
<h2 style="text-align: center">Şifreyi değiştir</h2>
<form action="" method="post">
    <table align = "center" width = "600">
        <tr>
            <td align = "right"> <b>Eski şifrenizi giriniz:</b></td>
                <td><input type="password" name="eski_sifre"></br></td>
        </tr>

   <tr>
       <td align = "right"><b>Yeni şifreyi giriniz:</b></td>
          <td> <input type="password" name="yeni_sifre"></br></td>
   </tr>
       <tr>
           <td align = "right"> <b>Yeni şifreyi tekrardan giriniz:</b></td>
              <td> <input  type="password" name="yeni_sifre_tekrar"></br></td>
       </tr>

    <tr align = "center">
        <td colspan="8" align = "center"> <input type="submit" name="sifre_degistir" value="Şifre Değiştir"/></td>
    </tr>

    </table>

</form>
<?php

if(isset($_POST['sifre_degistir'])){

    $user = $_SESSION['mus_email'];

    $eski_sifre = $_POST['eski_sifre'];
    $yeni_sifre = $_POST['yeni_sifre'];
    $yeni_sifre_tekrar = $_POST['yeni_sifre_tekrar'];



    $sel_sifre = "select * from musteri where mus_sifre = '$eski_sifre' and mus_email = '$user' ";
    $run_sifre = mysqli_query($con, $sel_sifre);


    $check_sifre = mysqli_num_rows($run_sifre);

    if($check_sifre==0){
        echo "<script>alert('Eski şifreniz yanlış!')</script>";
        exit();
    }

    if($yeni_sifre!= $yeni_sifre){
        echo "<script>alert('Yeni şifreniz eşleşmiyor!')</script>";
        exit();
    } else {
        $update_sifre = "update musteri set mus_sifre = '$yeni_sifre' where mus_email = '$user'";
        $run_update = mysqli_query($con, $update_sifre);
        echo "<script>alert(' Şifreniz başarıyla güncellendi!')</script>";
        echo "<script>window.open(' hesabim.php', '_self')</script>";

    }
}

?>