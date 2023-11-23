<?php
include "koneksi.php";
$Q = mysqli_query($koneksi, "SELECT * FROM sekolah");

if($Q) {
    $posts = array();
    if(mysqli_num_rows($Q)) {
        while($post = mysqli_fetch_assoc($Q)) {
            $posts[] = $post;
        }
    }  
    $data = json_encode(array('results'=>$posts));
    echo $data;
} else {
    // Menangani kesalahan jika terjadi
    echo "Error: " . mysqli_error($koneksi);
}
?>
