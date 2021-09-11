<html>
<head>
<title>form  pengulangan</title>
</head>
<body>
<center>
<h2>form pengulangan</h2>
<form method ="POST" action="">
<table>
<p>1.deret bilangan ganjil</p>
<p>2.segitiga sama kaki terbalik</p>
<p>3.deret bilangan kelipatan</p>
<tr>
<td>pilih</td>
<td>:</td>
<td><input type ="number" name="pilih"></td>
</tr>
<tr>
<td>masukan angka</td>
<td>:</d>
<td><input type ="number" name="angka"></td>
</tr>
<tr>
<td></td>
<td></td>
<td>
<td><input type ="submit" name="simpan" value="KIRIM"></td>
</tr>
</table>
</form>

<?php
 echo "<br>";
 if(isset($_POST['simpan'])){
    $pilih = $_POST['pilih'];
    $angka = $_POST['angka'];

    if($pilih == 1){
        for($i=1; $i <= $angka; $i++){
            if ($i % 2 == 0){
            }else {
                echo "$i";
            }
        }
    } else if ($pilih == 2){
        $star =$angka;
        for ($a =1; $a<=$star; $a++){
            for ($b=1; $b <=$a; $b++){
            }
            for ($c =$star; $c >=$a; $c-=1){
                echo "*";
            }
            echo "<br>";
        }
    } else {
        for($i =1; $i <=$angka; $i++){
            if ($i %3 == 0){
                echo "$i";
            }
        }
    }
 }
?>
</center>
</body>
</html>