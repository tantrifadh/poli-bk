<?php
    session_start();

    //menghapus semua session
    session_destroy();
    //pindah halaman dashboard
    header("location:../../index.php");
?>