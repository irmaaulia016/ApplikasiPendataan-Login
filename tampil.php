<?php
include("koneksi.php");
?>


<html>
<head>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../login.php?pesan=belum_login");
    }
    ?>
    <h0>Selamat Datang, <?php echo $_SESSION['username']; ?>! ANDA BERHASIL LOGIN-!!</h0>
    <br/>
    <br/>
    <h2> APLIKASI PENDATAAN RUANG SMK 1 SAYUNG</h2>
    <h4><a href ="logout.php">LOGOUT</a></h4>
    <table border="1">
        <tr>
            <th>NAMA</th>
            <th>JENIS</th>
            <th>KONDISI</th>
</tr>

<?php
include("koneksi.php");
$sql="SELECT * FROM ida_9nov";
$query=mysqli_query($db, $sql);

while($pendataan=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$pendataan['nama']."</td>";
    echo "<td>".$pendataan['jenis']."</td>";
    echo "<td>".$pendataan['kondisi']."</td>";
    echo "<td>";
    echo "<a href='edit.php?id=".$pendataan['id']."'>Edit</a> |";
    echo "<a href='hapus.php?id=".$pendataan['id']."'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>
<h3><a href="tambah.php">Tambah</a></h3>