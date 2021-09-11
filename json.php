<?php

//$mahasiswa = [
  //'nama' => 'Nurul Huda',
  //'domisili' => 'Surabaya'
//];

//echo json_encode($mahasiswa);

//$nilaiUjian = [70, 80, 50, 90];

//echo json_encode($nilaiUjian);

$listMahasiswaJSON = '[
    { "nama": "Nurul Huda" },
    { "nama": "Renza Ilhami Risqi" },
    { "nama": "Taufan Aji" },
    { "nama": "Rahmad Dwi Oktanto" }
  ]';
          //di konversikan ke json
          $list =json_decode($listMahasiswaJSON);

          //tampilkan ke datanya
          foreach($list as $key => $mahasiswa){
              echo "$key. nama : {$mahasiswa->nama} <br>";
          }
?>