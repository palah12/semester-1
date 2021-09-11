<!DOCTYPE html>
<html>
    <head>
        <title>Form Biodata Diri</title>
</head>
<body>
    <center>
        <h1>Program Penggajihan</h1>
        <h2>PT. GARUDA KELINCI AKUR</h2>
    <form method = "POST" action="">
        <table>
            <tr>
                <td>Nama Bendahara</td>
                <td>:</td>
                <td><input type='text' name='nama'></td>
</tr>
<tr>
                <td>Nama Pekerja</td>
                <td>:</td>
                <td><input type='text' name='nama1'></td>
</tr>
<tr>
    <td>Jenis kelamin</td>
    <td>:</td>
    <td>
        
    <input type='radio' name='jenis' value='laki laki'>Laki-Laki
    <input type='radio' name='jenis' value='perempuan'>Perempuan
    </tr>
<tr>
    <td>Tanggal Gaji</td>
    <td>:</td>
    <td><input type='date' name= 'tanggal'></td>
</tr>
<tr>
    <td>Jabatan</td>
    <td>:</td>
    <td>
    <select name ='status'>
        <option value ='direktur'>Direktur</option>
        <option value ='manager'>Manager</option>
        <option value ='pegawai'>Karyawan</option>
        <option value ='ob'>OB</option>

</td>
</select>
</tr>
<tr>
    <td>Pendidikan terakhir</td>
    <td>:</td>
    <td>
    <select name ='pendidikan'>
        <option value ='sd'>SD</option>
        <option value ='SMP/MTS'>SMP</option>
        <option value ='SMK/SMA/MA'>SMA</option>
        <option value ='s1'>S1</option>
</td>
</select>
</tr>
    <tr>
    <td>Lembur</td>
    <td>:</td>
    <td><input type='text' name='lembur' > Hari /Rp.20.000</td>
</tr>
</td>
<tr>
    <td>Potongan</td>
    <td>:</td>
    <td><input type='text' name='potongan'></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" value='KIRIM'></td>
</tr>
</table>
</form>

</body>
</html>
<?php

if(isset($_POST['simpan'])){
$nama = $_POST['nama'];
$nama1 = $_POST['nama1'];
$lembur = $_POST['lembur'];
$tanggal =$_POST['tanggal'];
$jenis = $_POST['jenis'];
$potongan = $_POST['potongan'];
$pendidikan = $_POST['pendidikan'];
$status =$_POST['status'];
switch ($gaji){
    case 1: $gapok = 10000000; break;
    case 2: $gapok = 7500000; break;
    case 3: $gapok = 5000000; break;
    case 4: $gapok = 2500000; break;
    default;
}

    echo "<b>Struk Gaji Karyawan</b><br>";
    echo "-------------------------------------------------------<br>";
    echo "Tanggal :<b><i>$tanggal</i></b><br>";
    echo "<b>Gaji Pokok<br></b>";
    echo "Nama Karyawan : $nama1<br>";
    echo "Jenis Kelamin : $jenis<br>";
    echo "Pendidikan Terakhir : $pendidikan<br>";
    echo "Jabatan: $status<br>";
    echo "Gaji : Rp.$gaji<br>";
    echo "<b><i>Tunjangan <br></b></i>";
    echo "Tunjungan Pendidikan :<br>";
    echo "Vakasi Lembur<br>";
    echo "<b><i>Potongan</b></i><br>";
    echo "Potongan :<br>";
    echo "<b>Total Gaji :</b><br>";
   echo "<center>Bendahara : <br><b>$nama</b></center>";
}
?>