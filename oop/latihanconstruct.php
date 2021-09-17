<?php

class biodata{


    function __construct($nama,$jk,$kelas){
        echo "nama saya: $nama  <br/>";
        echo "jenis kelamin: $jk <br/>";
        echo "kelas: $kelas <br/>";
        echo "<hr>";
    }
    
    

}

$biodata = new biodata("palah","laki-laki","XII");
$biodata = new biodata("uus","laki-laki","XII");
$biodata = new biodata("ecep","laki-laki","XII");





?>