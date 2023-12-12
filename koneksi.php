<?php
$con = new mysqli("localhost", "root", "", "toko_online");

// Periksa koneksi
if ($con->connect_error) {
    die("Gagal terhubung: " . $con->connect_error);
}


?>