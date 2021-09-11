<h2>segitiga sama kaki</h2>
<form method ="POST" action="">
<table>
<tr>
<td>masukan jumlah</td>
<td>:</td>
<td><input type ="text" name='a' required ></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="simpan" value="SIMPAN"></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $n=$_POST['a'];
for ($a = 1; $a <=$n; $a++){
    for($b =1; $b <= $n -$a; $b++){
        echo "&nbsp";
    }
    for ($c = 1; $c <= $a; $c++){
        echo "*";
    } 
    echo "<br>";
}
}
?>