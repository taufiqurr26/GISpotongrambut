<?php
include "koneksi.php";
$Q = mysqli_query($koneksi, "select count(tipe) as biasa FROM `kategori` WHERE tipe LIKE 'biasa%'");
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));             
}

?>