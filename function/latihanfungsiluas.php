<?php

function lingkaran($r){
    $luas =3.14 * $r * $r;
    return $luas ;
}
  function segitiga($alas,$tinggi){
      $keliling = 1/2 * ($alas * $tinggi);
      return $keliling;
  }
  function persegi($panjang,$lebar){
    $keliling=$panjang*$lebar;
    return $keliling;
}


  echo "luas lingkaran=" .lingkaran(10);
  echo "<br>";
  echo "luas segitiga=" .segitiga(10,9);
  echo "<br>";
  echo "luas persegi=" .persegi(10,30);
?>
