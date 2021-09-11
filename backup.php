<html>
<head>
<title>program penggajihan</title>
</head>
<body>
<h3>PT.GARUDA KELINCI AKUR</h3>
<form method = "POST" action= "">
<table>
<tr>
<td>nama bendahara</td>
<td>:</td>
<td><input type ='text' name='namaa'></td>
</tr>
<td>nama pekerja</td>
<td>:</td>
<td><input type ='text' name='namab'></td>
</tr>
<td>jenis kelamin</td>
<td>:</td>
<td><input type='radio' name ='jenis' value='laki laki'>laki laki<br></td>
<td><input type ='radio' name='jenis' value ='perempuan'>perempuan <br></td>
</tr>
<td>tanggal gaji</td>
<td>:</td>
<td><input type ='date' name ='tanggal'></td>
</tr>
<td>jabatan</td>
<td>:</td>
<td><select name ='jabatan' value ="">
<option value ="pilih jabatan">pilih jabatan</option>
<option value ="direktur" >direktur</option>
<option value ="manager">manager</option>
<option value ="karyawan">karyawan</oprtion>
<option value ="ob">ob</option>
</tr>
<td>pendidikan terakhir</td>
<td>:</td>
<td><select name ='pendidikan' value ="">
<option value ="pendidikan terakhir">pendidikan terakhir</option>
<option value ="sd" >sd</option>
<option value ="smp">smp</option>
<option value ="sma/smk">sma/smk</option>
<option value ="s1"> s1 </option>
</tr>
<td>lembur</td>
<td>:</td>
<td><input type ='text' name='lembur'>hari/rp.20.000</td>
</tr>
<td>potongan</td>
<td>:</td>
<td><input type ='text' name='potongan'></td>
</tr>

<td></td>
<td></td>
<td><input type="submit" name="simpan" value="KIRIM"></td>
</tr>
</table>
</form>
</body>
</html>
<button type="submit" class="btn btn-primary">Submit</button>