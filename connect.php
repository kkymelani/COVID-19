<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $dbase = 'unimedia_senin';

    $connect = mysqli_connect($server, $user, $pass, $dbase);

    if(!$connect) {
        die("Koneksi Gagal : ".mysqli_connect());
    }

    // echo "Koneksi Berhasil\n";

    
?>