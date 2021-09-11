<?php
//function tentang_saya($a,$b) 
//{
  //$nama= $a;
  //$umur= $b;
  //echo "perkenalan,nama saya".$a. "<br/>";
  //echo "umur saya " .$b. "tahun <br/>";

  //if($b >= 17){
      //echo "anda sudah memiliki ktp";
  //}
  //else {
      //echo "anda belum memiliki ktp";
  //}
//}
//echo  tentang_saya("palah",17);

function penjumlahan($angka1,$angka2){
    $tambah = $angka1 + $angka2;

    echo "hasil penjumlahan:".$tambah ;
} 
penjumlahan(10,5);
echo "<br>";

function pengurangan($angka1,$angka2){
    $kurang = $angka1 - $angka2;

    echo "hasil pengurangan:".$kurang ;
} 
pengurangan(10,5);
echo "<br>";

function perkalian($angka1,$angka2){
    $kali = $angka1 * $angka2;

    echo "hasil perkalian:".$kali ;
} 
perkalian(10,5);
echo "<br>";

function pembagian($angka1,$angka2){
    $bagi = $angka1 / $angka2;

    echo "hasil pembagian:".$bagi ;
} 
pembagian(10,5);

?>
