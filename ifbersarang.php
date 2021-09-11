<?php
 $kelas = "XI";
 $nilai = "76";

    if ($kelas == "X" || $kelas == "x"){
         if($nilai >= 75){
             echo "selamat anda lulus";
         }
         else{
             echo "selamat anda tidak lulus";
         }
    }
    else if($kelas == "XI" || $kelas == "Xi"){
        if($nilai >= 78){
            echo "selamat anda lulus";
        }
        else{
            echo "selamat anda tidak lulus";
        }
    }
        else if($kelas == "XII" || $kelas == "Xii"){
            if($nilai >= 80){
                echo "selamat anda lulus";
            }
            else{
                echo "selamat anda tidak lulus";
            }
        }
        else{
            echo "tidak ada kelas";
        }
?>