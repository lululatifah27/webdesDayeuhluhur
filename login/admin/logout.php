<?php
// mengaktifkan session
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
header("login1:/WebdesDayeuhluhur1/register/login.php");
?>