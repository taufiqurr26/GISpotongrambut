<?php
include "koneksi.php";
$Q = mysqli_query($koneksi, "select count(tipe) as mewah FROM `kategori` WHERE tipe LIKE 'mewah%'");
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