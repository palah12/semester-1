<?php
//file json yang akan di baca
$file = "anggota.json";

//mendapatkan file json
$anggota = file_get_contents($file);

//mendecode anggota.json
$data =json_decode($anggota,true);

//membaca/menampilkan data array menggunakan foreach
foreach ($data as $key => $d){
    echo "no :" .$d['no']. "<br>";
    echo "nama:".$d['nama']."<br>";
    echo "jurusan:".$d['jurusan']. "<br>";
}
?>