<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$database = "lulusansmanere";
$koneksi = mysqli_connect($host, $user, $pass, $database);
if (mysqli_connect_errno()) {
    echo "KONEKSI GAGAL : " . mysqli_connect_error();
}
