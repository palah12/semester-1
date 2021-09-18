<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRUK GAJI</title>
</head>

<body>
    <form action="" method="post">
        <center>
            <legend>
                <h4>PENGGAJIHAN<br>
                GURU/KARYAWAN YAYASAN ASSALAAM</h4>
                </legend>
    <table>
<tr>
        <td>
        <label for="no">No
            </label>
        </td>
        <td>:</td>
        <td><input type="text" name="no" id="no" required>
        </td>
</tr>
<tr>
        <td>
        <label for="nama">Nama
            </label>
        </td>
        <td>:</td>
        <td><input type="text" name="nama" id="nama" required>
        </td>
</tr>
<tr>
        <td>Unit</td>
        <td>:</td>
        <td>
        <select name="unit" required>
            <option value=""></option>
            <option value="tk">TK</option>
            <option value="sd">SD</option>
            <option value="mts">MTS</option>
            <option value="smp">SMP</option>
            <option value="sma">SMK</option>
            
        </select>
        </td>
</tr>

<tr>
        <td>Tanggal Gaji</td>
        <td>:</td>
        <td><input type ='date' name='tanggal'></td>
</tr>

<tr>
        <td><br><center><b>Gaji</b></center></br></td>
</tr>


<tr>
        <td>Jabatan</td>
        <td>:</td>
        <td>
        <select name="jabatan" required>
            <option value=""></option>
            <option value="kepala_sekolah">Kepala Sekolah</option>
            <option value="guru">guru</option>
            <option value="Karyawan">Karyawan</option>
        </select>
        </td>
</tr>

<tr>
        <td>
        <label for="pekerja">Lama Kerja
            </label>
        </td>
        <td>:</td>
        <td><input type="text" name="lama_kerja" id="lama_kerja" required>
        </td>
</tr>


<tr>
        <td>Status Kerja</td>
        <td>:</td>
        <td>
        <select name="pendidikan" required>
            <option value=""></option>
            <option value="tetap">Pegawai Tetap</option>
            <option value="kontrak">Pegawai Kontrak</option>
            
        </select>
        </td>
</tr>

<tr>
        <td><br><center><b>Potongan</b></center></br></td>
</tr>


<tr>
        <td>
        <label for="bpjs">BPJS</label>
        </td>
        <td>:</td>
        <td>
        <input type="text" name="bpjs" id="bpjs" required> 
        </td>
</tr>
<tr>
        <td>
        <label for="pinjam">Pinjaman</label>
        </td>
        <td>:</td>
        <td>
        <input type="text" name="pinjam" id="pinjam" required> 
        </td>
</tr>

<tr>
        <td>
        <label for="tabungan">Tabungan</label>
        </td>
        <td>:</td>
        <td>
        <input type="text" name="tabungan" id="tabungan" required> 
        </td>
</tr>

<tr>
        <td>
        <label for="lainya">Lainnya</label>
        </td>
        <td>:</td>
        <td>
        <input type="text" name="lainya" id="lainya" required> 
        </td>
</tr>

        </table>
        <button type="submit" name="simpan">Proses</button>
    </form>
</center>
</body>

</html>
<?php

if(isset($_POST['simpan'])){
$no = $_POST['no'];
$nama = $_POST['nama'];
$unit = $_POST['unit'];
$tanggal =$_POST['tanggal'];

 
 echo "<table>";
 echo "<tr>";
 echo "No:" .$no;
 echo "<br>";
 echo "NAMA:".$nama;
 echo "<br>";
 echo "UNIT:".$unit ;
 echo "<br>";
 echo "Tanggal:" .$tanggal;
 
}
 
    
?>