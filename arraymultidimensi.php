<?php
$data = [
    [
        'nama'=>"palah",
        'buah'=> 
    [
    ['jenis'=> "mangga"],
     ['jenis' => "apel"],
     ['jenis' => "pear"]
    ]
    ]
   // [
        //'nama'=>'meylani',
        //'buah'=>'anggur'
    //]
    ];

    foreach ($data as $data2){
        echo "nama pemilik :".$data2['nama']. "<br>";
        echo "buah kesukaan :" ;
        foreach ($data2['buah'] as $data3){
            echo "<li>".$data3['jenis']."</li>";
        }
    }