<h2>segitiga terbalik</h2>
<form method ="POST" action="">
<table>
<tr>
<td>masukan jumlah</td>
<td>:</td>
<td><input type ="text" name='angka' required ></td>
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
    $angka=$_POST['angka'];
for ($i=$angka; $i >= 1; $i--){
    for ($a=1; $a <= $i; $a++){
        echo "*";
    }
    echo "<br>";
}
}
?>