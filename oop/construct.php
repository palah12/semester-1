<?php
  
   class manusia{

    function __construct(){
        echo "ini adalah construct <br/>";
    }

    //method
    function tampilkan_nama(){
        return "nama saya palaah <br/>";
    }
    function hobi(){
        return "hobi saya tidur <br/>";
    }
    function alamat(){
        return "alamat : jl sayati <br/>";
    }
    function jenis_kelamin(){
        return "jenis kelamin : laki-laki";
    }
}
$manusia = new manusia();
echo $manusia-> tampilkan_nama();
echo $manusia-> hobi();
echo $manusia-> alamat();
echo $manusia-> jenis_kelamin();

?>