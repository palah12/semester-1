<?php

$nama = array(
    "palah",
    "aziz",
    "aliyul",
    "adzura",
    "nabila",
    "cecep",
    "cindy",
    "maudy",
    "diki",
    "dinda");

    $nilai = array(
        "a"=>10,
        "b"=>20,
        "c"=>30,
        "d"=>40,
        "e"=>50,
        "f"=>60,
        "g"=>70,
        "h"=>80,
        "i"=>90,
        "j"=>100);

        //echo "nilai produksi siswa";
        //echo "<br>";
        //echo $nama[1]." = ".$nilai ['g'];
        //echo "<br>";
        //echo $nama[10]." = ".$nilai ['h'];
        //echo " <br>";
        //echo $nama[6]." = ".$nilai ['i'];
        //echo " <br>";
        //echo $nama[8]." = ".$nilai ['j'];
       // echo " <br>";
        //echo $nama[5]." = ".$nilai ['f'];

        //menampilkan seluruh data array
        foreach($nama as  $val){
            echo "$val";
            echo "<br />";
        }

?>