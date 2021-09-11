<?php
 echo "+++ RESTORAN SUNDA TEA +++";
 echo "<br>";

 $food ="makanan";
 $makanan ="mie goreng";
 $jma = 1;

  if ($food == "makanan"){
      if ($makanan == "mie goreng "){
          $harga = 10000;
          $jumlah = $jma * $harga ;
          $bayar = $jumlah -($jumlah *(20/100));
          echo "jenis pesanan : $food <br>";
          echo "nama pesanan : $makanan <br>";
          echo "jumlah : $jma <br>";
          echo "total : $bayar ";
      }
  }
?>