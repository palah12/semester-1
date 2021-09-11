<?php
  $nilai = 200;

  if($nilai >= 90 && $nilai <=100){
      echo "GRADE A";
  }
  else if($nilai >= 80 && $nilai < 90){
      echo "GRADE B";
  }
  else if($nilai >= 70 && $nilai <80){
      echo "GRADE C";
  }
  else if($nilai >= 60 && $nilai <70){
      echo "GRADE D";
  }
  else if($nilai < 60 && $nilai >=0){
      echo "GRADE E";
  }else{
      echo "NILAI KACAU";
  }
?>  