<?php
  //class
  class motor{

    //property
    var $pemilik;
    var $merk;
    var $ukuran_layar;

    //method //function
    function motor_maju($ket){
        return $ket;
    }

    function motor_mundur($ket){
          return $ket;
    }

    function motor_belok(){
        return "motor belok ke kanan";
    }

    function motor_belok2(){
        return "motor belok ke kiri";
    }

    //isi dari class laptop


  }
  //object
  $motor_andi = new motor();
  echo $motor_andi->motor_maju("motor maju kedepan");
  echo "<br>";
  echo $motor_andi->motor_mundur("MUNDUR COKKK");
  echo "<br>";
  echo $motor_andi->motor_belok();
  echo "<br>";
  echo $motor_andi->motor_belok2();
  echo "<br>";
  
  //set property
   $motor_andi->merk="yamaha";
   echo $motor_andi->merk;
   echo "<br>";
   $motor_andi->merk="suzuki";
   echo $motor_andi->merk;
   echo "<br>";
   $motor_andi->merk="honda";
   echo $motor_andi->merk;
   echo "<br>";
   $motor_andi->merk="ktm racing";
   echo $motor_andi->merk;

  ?>