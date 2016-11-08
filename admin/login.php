<?php
session_start();
?>

<?php

include("../fonksiyon/db.php");

if (isset($_POST['login'])) {
var_dump($_SESSION["myCode"]);
    var_dump($_POST["kontrol"]);
    exit;
    if ($_SESSION["myCode"] == $_POST["kontrol"]) {
        $email = mysql_real_escape_string($_POST['email']);
        $sifre = mysql_real_escape_string($_POST['sifre']);
        $sel_user = "select * from admin where kullanici_email = '$email' and kullanici_sifre = '$sifre'";
        $run_user = mysqli_query($con, $sel_user);
        $check_user = mysqli_num_rows($run_user);

        if ($check_user == 0) {

            echo "<script>alert('Şifre veya Email yanlış, Lütfen tekrar deneyiniz!')</script>";

        }
        else {
            $_SESSION['kullanici_email'] = $email;
            echo "<script>window.open('index.php?logged_in= Login girişi başarılı!', '_self')</script>";
        }  }
    else {
        echo "<script>alert('Kod Hatalı!')</script>";
    }
}
?>

    <!DOCTYPE>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" xmlns="http://www.w3.org/1999/html"/>
    <html>
    <head>
        <title>Login Formu</title>
        <link rel="stylesheet" href="style/login_style.css" media="all">
    </head>
    <div class="login">
        <h2 style="color: #ffffff; text-align: center;"><?php echo @$_GET['not_admin']; ?></h2>

        <h2 style="color: #ffffff; text-align: center;"><?php echo @$_GET['cikis']; ?></h2>

        <h1>Admin Login</h1>

        <form method="post" action="login.php">
            <input type="text" name="email" placeholder="Email" required="required"/>
            <input type="password" name="sifre" placeholder="Password" required="required"/>
            <input type='text' name='kontrol'/><br>
            <?php echo "<img src='captcha.php'/>" ?>
            <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Login</button>
        </form>
    </div>
    </html>

<?php echo $_SESSION['myCode'];?>
