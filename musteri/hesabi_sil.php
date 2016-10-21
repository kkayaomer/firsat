<br>

  <h2 style="text-align: center; color: saddlebrown">Hesabınızı silmek istediğinizden eminmisiniz?</h2>
  <form action="" method="post">

<br>
      <input type="submit" name="evet" value="Evet"/>
      <input type="submit" name="hayir" value="Hayır"/>




  </form>
        <?php


        $user = $_SESSION['mus_email'];

        if(isset($_POST['evet'])){



            $delete_mus = "delete from musteri where mus_email = '$user'";
            $run_mus = mysqli_query($con, $delete_mus);
            echo "<script>alert('Üzgünüz hesabınız silindi!')</script>";
            echo "<script>window.opent('../index.php', '_self')</script>";
        }

     if(isset($_POST['hayir'])){
         echo "<script>alert('Şaka yaptık, tekrar dene!')</script>";
         echo "<script>window.opent('hesabim.php', '_self')</script>";

     }

        ?>