<?php
 $nilai = 1000;
  if($nilai >= 75 && $nilai <= 100){
      echo "LULUS";
  }
  else if($nilai < 75 && $nilai >= 0){
      echo "TIDAK LULUS";
  }else{
      echo "NILAI TIDAK VALID";
  }
?>