<?php
// mengatifkan sesion
session_start();

//mengapus semua session
session_destroy();

//mengalihkan halaman sambil mengirim pesan logout
header("location:index.php?pesan=logout");
?>