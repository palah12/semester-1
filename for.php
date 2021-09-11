<html>
<head>
<title>form input</title>
</head>
<body>
<h2>for</h2>
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

for ($i =0; $i <=$angka ; $i++){
    echo "$i palah tampan <br>";
}
}

?>