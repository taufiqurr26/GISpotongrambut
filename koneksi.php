<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "gis";

$koneksi = mysqli_connect($host, $username, $password, $database);
 if (mysqli_connect_errno()){
        echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
    }
?>