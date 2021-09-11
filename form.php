<!DOCTYPE html>
<html>
<head>
<title>form biodata diri</title>
</head>
<body>
<h3>form biodata diri</h3>
<form method = "POST" action= "">
<table>
<tr>
<td>Nama</td>
<td>:</td>
<td><input type ='text' name='nama'></td>
</tr>
<td>tempat lahir</td>
<td>:</td>
<td><input type ='text' name='tempat lahir'></td>
</tr>
<td>umur</td>
<td>:</td>
<td><input type ='text' name ='umur'></td>
</tr>
<td>tanggal lahir</td>
<td>:</td>
<td><input type ='date' name ='tanggal lahir'></td>
</tr>
<td>jenis kelamin</td>
<td>:</td>
<td><input type='radio' name ='jenis kelamin' value='laki laki'>laki laki<br></td>
<td><input type ='radio' name='jenis kelamin' value ='perempuan'>perempuan <br></td>
</tr>
<tr>
<td>alamat</td>
<td>:</td>
<td><textarea name ="alamat"></textarea>
</tr>
<td>agama</td>
<td>:</td>
<td><select name  = 'select option' name ="agama" value ="">
<option value ="islam" >islam</option>
<option value ="kristen">kristen</option>
<option value ="hindu">hindu</oprtion>
<option value ="budha">budha</option>
<option value ="katolik">katolik</option>
</tr>
<td>pendidikan terakhir</td>
<td>:</td>
<td><select name  ='select option ' name ="pendidikan terakhir" value ="">
<option value ="sd" >sd</option>
<option value ="smp">smp</option>
<option value ="sma/smk">sma/smk</option>>
</tr>
<td>status</td>
<td>:</td>
<td><select name ='select option' name ='status'>
<option value ="pelajar" >pelajar</option>
<option value ="sudah menikah">sudah menikah</option>
<option value ="belum menikah">belum menikah</option>
</tr>
<tr>
<td>hobby</td>
<td>:</td>
<td><input type ='checkbox' name ='hobby'>mancing
<td><input type ='checkbox' name ='hobby'>maen bola
<td><input type ='checkbox' name ='hobby'>renang
<td><input type ='checkbox' name ='hobby'>tidur
</tr>
<td>cita cita</td>
<td>:</td>
<td><select name ='select option' name ='cita cita'>
<option value ="orang sukses" >orang sukses</option>
<option value ="tni">tni</option>
<option value ="sepakbola">sepak bola</option>
</tr>
<td>kata kata bijak</td>
<td>:</td>
<td><textarea name ="alamat"></textarea>
</tr>


<td></td>
<td></td>
<td><input type="submit" name="simpan" value="KIRIM"></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tl = $_POST['tempat lahir'];
    $umur = $_POST['umur'];
    $jn =$_POST['jenis kelamin'];
    $agama= $_POST['agama'];
    $tl=$_POST['tempat lahir'];
    $tll= $_POST['tanggal lahir'];
    $pendidikan = $_POST['pendidikan terakhir'];
    $hobby = $_POST['hobby'];
    $cita= $_POST['cita cita'];
    $katabijak=$_POST['kata bijak'];

    echo" nama = $nama <br>";
    echo "umur = $umur <br>";
    echo "alamat = $alamat <br>";
    echo "agama = $agama";
    echo "jenis kelamin = $jn <br>";
    echo" tempat lahir = $tl <br>";
    echo "tanggal lahir = $tll <br>";
    echo "pendidikan terakhir = $pendidikan <br>";
    echo "hoby = $hobby";
    echo "cita cita = $cita <br>";
    echo "kata bijak = $katabijak <br>";

}
?>