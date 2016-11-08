<?php
/**
 * Created by PhpStorm.
 * User: Omer
 * Date: 28.09.2016
 * Time: 13:11
 */
?>

<div>

    <form method="post" action="">

        <table width="500" align="center" bgcolor="orange">

            <tr align="center">

                <td colspan="3"><h2>Alışveriş Yapmak için Giriş Yap veya Kaydol!</h2></td>
            </tr>

            <tr>
                <td align="right"><b>Email:</b></td>
                <td><input type="text" name="email" required="email" placeholder="Email giriniz"/></td>
            </tr>


            <tr>
                <td align="right"><b>Şifre:</b></td>
                <td><input type="password" name="password" required="password" placeholder="Sifre giriniz"/></td>
            </tr>
            <tr align="center">
                <td colspan="3"><a href="checkout.php?unut_sifre">Sifremi Unuttum?</a></td>
            </tr>
            <tr>
                <td align="right"><b>Ben Robot Değilim:</b></td>
                <td>
                    <input type='text' name='kontrol'/><br>
                    <?php echo "<img src='captcha.php'/>" ?>
                </td>
            </tr>

            <tr align="center">
                <td colspan="3"><input type="submit" name="login" value="Giris"/></td>
            </tr>
        </table>
        <h2 style="float: right; padding-right:20px; "><a href="musteri_kayit.php"
                                                          style="text-decoration: none; color:brown">Yeni? Kayıt </a>
        </h2>
    </form>
</div>

<?php


if (isset($_POST['login'])) {

        if ($_SESSION["kod"] == $_POST["kontrol"]) {
            $mus_email = $_POST['email'];
            $mus_sifre = $_POST['password'];
            $sel_mus = "select * from musteri where mus_sifre = '$mus_sifre' and  mus_email = '$mus_email'";
            $run_mus = mysqli_query($con, $sel_mus);
            $check_musteri = mysqli_num_rows($run_mus);

            if ($check_musteri == 0) {
                echo "<script>alert('Şifre veya Email yanlış, Lütfen tekrar deneyiniz!')</script>";

            }
            $ip = getIp();
            $sel_sepet = "select * from alisveris_sepeti where ip_addres ='$ip'";

            $run_sepet = mysqli_query($con, $sel_sepet);
            $_SESSION['mus_email'] = $mus_email;

            $check_sepet = mysqli_num_rows($run_sepet);
            if ($check_sepet > 0 and $check_sepet == 0) {

                echo "<script>alert('Giriş başarılı,Teşekkürler!')</script>";
                echo "<script>window.open('musteri/hesabim.php', '_self')</script>";
            }
            else {
                echo "<script>alert('Giriş başarılı,Teşekkürler!')</script>";
                echo "<script>window.open('checkout.php', '_self')</script>";
            }

        }
          else {
            echo "<script>alert('Kod Hatalı!')</script>";
          }

  }

?>
