<!DOCTYPE html>
<html>
<head>
    <title>Membuat login</title>
</head>
<body>
    <h2>Latihan Login XII RPL SMKN 1 SAYUNG<h2>
        <br/>
        <!-- cek pesan notifikasi -->
        <?php
        if(isset($_GET['pesan'])){
          if($_GET['pesan'] == "gagal"){
                echo"Login gagal! username dan password salah!";
          }else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
          }else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman admin";
          }
        }
        ?>
        <br/>
        <br/>
        <form method="POST" action="login.php">
            <table>
                <tr>
                    <td>username</td>
                    <td>:</td>
                    <td><input type="text" name="username" placeholder="masukan username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" placeholder="masukan password"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="LOGIN"></td>
    </tr>
    </table>
    </form>
    </body>
    </html>