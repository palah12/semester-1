<?php

   $judul =[
       ["judul"=>"belajar php & my sql untuk pemula","penulis"=>"petani kode"],
       ["judul"=>"tutorial php dari nol hingga mahir","penulis"=>"dunia ilkom"],
       ["judul"=>"membuat aplikasi web dengan php","penulis"=>"jago koding"],
       ["judul"=>"tutorial belajar android","penulis"=>"programer"],
       ["judul"=>"tutorial belajar mikrotik","penulis"=>"dunia cyber"]
   ];

   
   echo $judul[1]['judul']." " .$judul[1]['penulis']." <br>";
   echo $judul[0]['judul']." " .$judul[0]['penulis'];

?>