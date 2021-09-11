<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1><i>nilai ujian kelas 12 rpl</i></h1>
        <table border="1">
            <tr>
                <th>nama</th>
                <th>matematika</th>
                <th>bahasa ingris</th>
                <th>bahasa indo</th>
                <th>kejuruan</th>
                <th>rata-rata</th>
                <th>grade</th>
                <th>status</th>
                
</tr>
<?php
function nilai($nama,$mtk,$bindo,$bingris,$kej){
   echo "<tr>";
                echo "<th>$nama</th>";
                echo "<th>$mtk</th>";
                echo "<th>$bindo</th>";
                echo "<th>$bingris</th>";
                echo "<th>$kej</th>";
                $rata=($mtk+$bindo+$bingris+$kej)/4;
                echo "<th>$rata</th>";
                if($rata >= 90 && $rata <=100){
                    echo "<td> A</td>";
                }
                else if($rata >= 80 && $rata < 90){
                    echo "<td> B</td>";
                }
                else if($rata >= 70 && $rata <80){
                    echo "<td> C</td>";
                }
                else if($rata >= 60 && $rata <70){
                    echo "<td> D</td>";
                }
                else if($rata < 60 && $rata >=0){
                    echo "<td> E</td>";
                }else{
                    echo "<td>NILAI KACAU</td";
                }
                ?>
                <?php
                if ($rata >= 75){
                    ?>
                    <td> lulus </td>
                    <?php
                } else {
                    ?><td>tidak lulus</td>
                
                
                <?php
                }
}
nilai("palah",80,80,70,100);
?>