<?php
include "koneksi.php";

$posts = array();

$query = "SELECT * FROM potongrambut";
$result = mysqli_query($koneksi, $query);

if ($result) {
    while ($post = mysqli_fetch_assoc($result)) {
        $posts[] = $post;
    }
    $data = json_encode(array('results' => $posts));
    header('Content-Type: application/json');
    echo $data;
} else {
    // Tangani kesalahan jika query tidak berhasil
    $error = array('error' => 'Query tidak berhasil.');
    echo json_encode($error);
}

mysqli_close($koneksi);
?>
