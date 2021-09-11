<?php
//file json yang akan di baca
$file = "latihan.json";

//mendapatkan file json
$anggota = file_get_contents($file);

//mendecode anggota.json
$data =json_decode($anggota,true);

foreach($data as $d){
echo "Nama:" .$d['nama']. "<br>";
echo "Domisili:".$d['domisili']. "<br>";
echo "Hobi:" ;
echo "<ul>";
echo "<li>";
echo implode("<li>", $d['hobi']). "</li> <br>";
echo "</li>";
echo "</ul>";
}
?>