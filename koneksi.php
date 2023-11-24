<?php
    $koneksi = mysqli_connect("localhost", "root", "", "2106114_erika");

    if (!$koneksi) {
        echo "<script>alert('koneksi database gagal');</script>";
    }
?>
