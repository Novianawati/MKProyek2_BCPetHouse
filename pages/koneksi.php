<?php
    $koneksi = mysqli_connect("localhost", "root", "dbpetshop");

    if(mysqli_connect_error()) {
        echo "Koneksi Gagal".mysqli_connect();
    }
?>