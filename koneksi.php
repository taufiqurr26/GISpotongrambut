<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "sekolah";

$koneksi = mysqli_connect($host, $username, $password, $database);
 if (mysqli_connect_errno()){
        echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
    }
?>